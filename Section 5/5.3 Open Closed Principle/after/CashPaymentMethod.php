<?php

require_once ('./PaymentMethod.php');

class CashPaymentMethod extends PaymentMethod {
    public function processPayment() {
        echo 'process cash payment' . PHP_EOL;
    }
}