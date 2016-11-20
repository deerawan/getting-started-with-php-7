<?php

class Payment {
    public function __get($property) {
        echo 'get is called' . PHP_EOL;
    }

    public function __set($property, $value) {
        echo 'set is called' . PHP_EOL;
    }
}

$todayPayment = new Payment();
$todayPayment->amount;
$todayPayment->amount = 3;