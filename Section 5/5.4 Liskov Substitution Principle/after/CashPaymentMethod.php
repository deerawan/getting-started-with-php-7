<?php

require('PaymentMethod.php');
require('MoneyPaymentMethod.php');

class CashPaymentMethod implements PaymentMethod, MoneyPaymentMethod
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