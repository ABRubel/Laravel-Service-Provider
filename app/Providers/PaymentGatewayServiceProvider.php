<?php

namespace App\Providers;

use App\Services\PaymentGatewayInterface;
use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PaymentGatewayInterface::class,
            function($app, $parameters) {
                $className = config('payment_gateway.gateways.' . $parameters['service']);
                return new $className;
            }
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
