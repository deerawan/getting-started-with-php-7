<?php

class Payment {
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function __call($method, $arguments) {
        echo 'sorry, method ' . $method . ' is not exist';
        return false;
    }
}

$todayPayment = new Payment();
$todayPayment->setPaymentDate('2016-05-01');