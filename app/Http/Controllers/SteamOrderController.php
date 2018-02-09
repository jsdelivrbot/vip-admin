<?php

namespace App\Http\Controllers;

use App\OPSkinsCache;
use App\Order;
use App\SteamOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SteamOrderController extends Controller
{
    public function create()
    {
        // Gets client raw inventory information
        $inventory = DaemonController::getInventoryFromAuthedUser();

        // Check if response was successful
        if ($inventory === false) {
            // No need to set message, if its false, DaemonController already set a message
            return redirect()->route('home');
        }

        // Retrieves just the names from the inventory
        $inventoryNames = [];
        foreach ($inventory as $item) {
            if (!isset($item->market_name)) {
                continue;
            }
            $inventoryNames[] = $item->market_name;
        }

        // Query our OPSkins cache based on inventory items
        $inventoryPrices = OPSkinsCache::whereIn('name', $inventoryNames)->get()->toArray();

        // Transform que result into an associative array to make access easier in views
        $associativePrices = [];
        foreach ($inventoryPrices as $price) {
            $associativePrices[$price['name']] = $price['price'];
        }

        // Return inventory view
        return view('steam-orders.create', [
            'inventory' => $inventory,
            'prices'    => $associativePrices,
        ]);
    }

    public function store(Request $request)
    {
        // Gets client raw inventory information
        $inventory = DaemonController::getInventoryFromAuthedUser();

        // Check if response was successful
        if ($inventory === false) {
            return redirect()->route('home');
        }

        // Gets the items selected to create Steam Offer
        $items = $request->get('items');

        // Decode the information in each value of array
        $items_decoded = [];
        foreach ($items as $item) {
            $items_decoded[] = json_decode($item);
        }

        // Fills the rest of the information Steam API gives us
        $full_item_list = DaemonController::fillItemArray($items_decoded, $inventory);

        // Check if response was successful
        if ($full_item_list === false) {
            return redirect()->route('home');
        }

        // Computes the value of the selected items
        $totalPrice = DaemonController::calculateTotalPrice($full_item_list);

        // Check if order is above maximum price
        if ($totalPrice > \Setting::get('max-order-price', 5000)) {
            flash()->error('Your order is above the maximum allowed price of $'.\Setting::get('max-order-price', 5000) / 100 .'!');

            return redirect()->route('steam-orders.create');
        }

        // Pre-calculate the duration before anything
        $duration = DaemonController::calculateOfferDuration($totalPrice);

        // Get maximum date from configuration
        $now = Carbon::now();
        $maxDate = Carbon::createFromFormat('Y-m-d H:i:s', \Setting::get('max-order-date'));
        $maxDateMaxDuration = $maxDate->diffInDays($now);

        // Check if order has enough value to be above 1 unit of item
        if ($duration < 7) {
            flash('Current order is below the minimum allowed of 7 days.');

            return redirect()->route('steam-orders.create');
        }

        // Check if order is above maximum duration
        if ($duration > $maxDateMaxDuration) {
            flash()->error('Your order is above the maximum allowed duration of '.$maxDateMaxDuration.' days!');

            return redirect()->route('steam-orders.create');
        }

        // Check if order is above maximum duration
        if ($duration > \Setting::get('max-order-duration', 120)) {
            flash()->error('Your order is above the maximum allowed duration of '.\Setting::get('max-order-duration', 120).' days!');

            return redirect()->route('steam-orders.create');
        }

        // Prepare orders
        $steamOrder = SteamOrder::make();
        $order = Order::make();

        // Fill Steam Order information
        $steamOrder->encoded_items = json_encode($full_item_list);

        // Fill base order information
        $order->public_id = $rand = substr(md5(microtime()), 0, \Setting::get('public-id-size', 15));
        $order->duration = $duration;
        $order->extra_tokens = floor($duration / \Setting::get('order-duration-per-extra-token', 30));
        $order->user()->associate(Auth::user());

        // Persist to database
        $steamOrderSaved = $steamOrder->save();
        $orderSaved = $order->save();

        // Associate each order to another
        $steamOrder->baseOrder()->save($order);

        // Redirect to view Steam Offer if successful
        if ($steamOrderSaved && $orderSaved) {
            flash()->success('Order created successfully!');

            return redirect()->route('steam-order.show', $order->public_id);
        } else {
            flash()->error('Error saving orders to database!');

            return redirect()->route('home');
        }
    }

    public function show(Order $order)
    {
        // Gets the client raw inventory information
        $inventory = DaemonController::getInventoryFromAuthedUser();

        // Check if response was successful
        if ($inventory === false) {
            return redirect()->route('home');
        }

        if (Auth::user()->cant('view', $order)) {
            flash()->error('You cannot view this Order!');

            return redirect()->route('home');
        }

        // Check if given order exists
        if (!$order) {
            flash()->error('Could not find Steam Order');

            return redirect()->route('home');
        }

        // Retrieves the associated Steam Order
        $steamOrder = $order->orderable()->first();

        // Checks if we found Steam order details
        if (!$steamOrder) {
            flash()->error('Could not find details of order #'.$order->public_id);

            return redirect()->route('home');
        }

        // Decodes the list of items for Steam Order
        $full_item_list = json_decode($steamOrder->encoded_items);

        // Calculates total price of order and fills list of items in order
        $totalPrice = DaemonController::calculateTotalPrice($full_item_list);

        // Computes the amount of days the order will result
        $days = DaemonController::calculateOfferDuration($totalPrice);

        // Return Steam Order
        return view('steam-orders.show', [
            'steamOrder' => $steamOrder,
            'order'      => $order,
            'duration'   => $days,
            'totalValue' => $totalPrice,
            'items'      => $full_item_list,
        ]);
    }

    public function sendTradeOffer(Order $order)
    {
        // Check if given order exists
        if (!$order) {
            flash()->error('Could not find order!');

            return redirect()->route('home');
        }

        // Retrieve what Steam Order is related to that order
        $steamOrder = $order->orderable()->get()->first();

        // Checks if we found Steam order details
        if (!$steamOrder) {
            flash()->error('Could not find details of order #'.$order->public_id);

            return redirect()->route('home');
        }

        // Check if the trade offer for this order was already sent
        if ($steamOrder->tradeoffer_id || $steamOrder->tradeoffer_state) {
            flash()->warning('There is already a trade offer live for this order!');

            return redirect()->back();
        }

        // Build trade offer message
        $message = 'Order #'.$order->public_id.' for '.$order->duration.' days.';

        // Call SendTradeOffer
        $result = DaemonController::sendTradeOffer(Auth::user()->tradelink, $message, $steamOrder->encoded_items);

        // Check if response was successful
        if ($result === false) {
            return redirect()->back();
        }

        // Multiple check to see if result is valid
        if (!$result || !property_exists($result, 'id') || !property_exists($result, 'state')) {
            flash()->error('Error trying to send a Steam Trade Offer.');

            return redirect()->back();
        }

        // Persist trade offer information to order
        $steamOrder->tradeoffer_id = $result->id;
        $steamOrder->tradeoffer_state = $result->state;
        $steamOrder->tradeoffer_sent = Carbon::now();

        $steamOrderSaved = $steamOrder->save();

        // Redirect to view if successful
        if ($steamOrderSaved) {
            flash()->success('Trade offer sent! Please notice you have '.\Setting::get('expiration-time-min', 60).' minutes to accept it before this order expires!');

            return redirect()->route('steam-order.show', $order->public_id);
        } else {
            flash()->error('Error saving order details to database!');

            return redirect()->route('home');
        }
    }
}
