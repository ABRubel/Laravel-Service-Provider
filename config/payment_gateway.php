<?php

use App\Services\PaymentGateways\{ Paypal,
                                  Stripe
                                };

return [
    'paypal' => [
        'class' => Paypal::class,
    ],
    'stripe' => [
        'class' => Stripe::class,
    ]
];