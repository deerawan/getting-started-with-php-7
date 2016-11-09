<?php

require('PaymentMethod.php');

class BitcoinPaymentMethod implements PaymentMethod {
    public function process() {
        echo 'do bitcoin' . PHP_EOL;
    }
}