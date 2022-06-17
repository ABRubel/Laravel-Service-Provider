<?php

namespace App\Services\PaymentGateways;

use App\Services\PaymentGatewayInterface;

class Stripe implements PaymentGatewayInterface
{
    public function makePayment()
    {
        dd("I am Stripe");
    }
}
