<?php

class Payment {
    public function __construct($paymentDate, $amount) {
        $this->paymentDate = $paymentDate;
        $this->amount = $amount;
    }

    public function getAmount() {
        echo 'my amount :' . $this->amount;
    }

    public function __destruct() {
        $this->amount = 0;
    }
}

$todayPayment = new Payment('2016-01-01', 1000);
$todayPayment->getAmount();
