<?php

namespace App\Services;

class PaymentGatewayRegistry
{

    protected $gateways = [];

    function register($name, PaymentGatewayInterface $instance)
    {
        $this->gateways[$name] = $instance;
        return $this;
    }

    function get($name)
    {
        if (in_array($name, $this->gateways)) {
            return $this->gateways[$name];
        } else {
            throw new \Exception("Invalid gateway");
        }
    }
}
