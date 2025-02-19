<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model'        => 'App\Policies\ModelPolicy',
        'App\Order'        => 'App\Policies\OrderPolicy',
        'App\Token'        => 'App\Policies\TokenPolicy',
        'App\Confirmation' => 'App\Policies\ConfirmationPolicy',
        'App\Server'       => 'App\Policies\ServerPolicy',
        'App\User'         => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
