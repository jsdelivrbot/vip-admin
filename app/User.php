<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, \Illuminate\Database\Eloquent\SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'avatar', 'tradelink', 'lang',
    ];

    protected $guarded = [
        'email', 'steamid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function confirmations()
    {
        return $this->hasMany('App\Confirmation');
    }

    public function tokens()
    {
        return $this->hasMany('App\Token');
    }

    public function allowedTokens()
    {
        $orders = $this->orders()->with('orderable')->get();
        $allowedTokens = 0;

        foreach ($orders as $order) {
            if ($order->type('Steam')) {
                if ($order->orderable->status()['text'] == 'Accepted') {
                    $allowedTokens += $order->extra_tokens;
                }
            } else {
                if ($order->orderable->token) {
                    $allowedTokens += $order->extra_tokens;
                }
            }
        }

        return $allowedTokens;
    }

    public function isAdmin()
    {
        $allowedId = ['76561198026414330', '76561198175503989', '76561198033283983'];

        return in_array($this->steamid, $allowedId);
    }

    public function tradeid()
    {
        $tradelink = $this->tradelink;
        $output_array = [];

        preg_match('/(?<=partner=)(\\d*)(?=&token)/', $tradelink, $output_array);

        return '[U:1:'.$output_array[0].']';
    }
}
