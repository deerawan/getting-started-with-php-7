<?php

require_once ('./PaymentMethod.php');

class CreditCardPaymentMethod extends PaymentMethod {
    public function processPayment() {
        echo 'process credit card payment' . PHP_EOL;
    }
}