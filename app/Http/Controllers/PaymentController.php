<?php

namespace App\Http\Controllers;

use App\Services\PaymentGatewayInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(PaymentGatewayInterface $service)
    {
        return $service->makePayment('test');
    }
}
