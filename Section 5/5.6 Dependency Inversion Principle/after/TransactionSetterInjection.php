<?php

require('PaymentMethod.php');

class TransactionSetterInjection {
    private $paymentMethod;

    public function __construct() {
        // constructor
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay() {
        $paymentMethod->process();
    }
}