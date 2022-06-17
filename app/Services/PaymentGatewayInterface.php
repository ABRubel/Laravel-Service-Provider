<?php
namespace App\Services;

interface PaymentGatewayInterface
{
    public function makePayment($data);
}