<?php
$directory = '\\App\\Services\\PaymentGateways\\';
return [
    'gateways' => [
        'paypal' => $directory . "Paypal",
        'stripe' => $directory . "Stripe"
    ]
];