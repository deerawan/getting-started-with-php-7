<?php

require('PaymentMethod.php');

class CashPaymentMethod implements PaymentMethod
{
    public function pay($amount)
    {
        echo 'amount payed ' . $amount;
    }

    public function switchCurrency($currency)
    {
        echo 'switch to ' . $currency;
    }
}