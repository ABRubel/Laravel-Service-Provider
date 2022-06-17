<?php

namespace App\Services\PaymentGateways;

use App\Services\PaymentGatewayInterface;

class Paypal implements PaymentGatewayInterface
{
    public function makePayment($data)
    {
        dd($data . " I am PayPal");
    }
}
