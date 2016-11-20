<?php

class Payment {
    private $amount;

    public function __construct() {
        $this->amount = 100;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$todayPayment = new Payment();
echo $todayPayment->amount . PHP_EOL;
$todayPayment->amount = 500;
echo $todayPayment->amount;