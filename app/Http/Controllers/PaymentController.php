<?php

namespace App\Http\Controllers;

use App\Services\PaymentGatewayInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $service = app()->makeWith(PaymentGatewayInterface::class, ['service' => $request->payment_method]);
        return $service->makePayment('test');
    }
}
