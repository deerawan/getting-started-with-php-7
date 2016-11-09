<?php

require('PaymentMethod.php');

class GoldBarPaymentMethod implements PaymentMethod
{
    public function pay($amount)
    {
        echo 'amount payed ' . $amount;
    }
}