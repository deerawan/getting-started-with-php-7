<?php

require('PaymentMethod.php');

class GoldBarPaymentMethod implements PaymentMethod
{
    public function pay($amount)
    {
        echo 'amount payed ' . $amount;
    }

    public function switchCurrency($currency)
    {
        throw Exception('not implemented');
    }
}