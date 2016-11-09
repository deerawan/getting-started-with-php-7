<?php

require('PaymentMethod.php');

class TransferPaymentMethod implements PaymentMethod {
    public function process() {
        echo 'do transfer' . PHP_EOL;
    }
}