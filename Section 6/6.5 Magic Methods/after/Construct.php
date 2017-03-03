<?php

class Payment {
    public function __construct() {
        echo 'created' . PHP_EOL;
    }

    public function __destruct() {
        echo 'destroyed' . PHP_EOL;
    }
}

$todayPayment = new Payment();