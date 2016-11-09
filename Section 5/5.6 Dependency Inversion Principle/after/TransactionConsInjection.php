<?php

require('PaymentMethod.php');

class TransactionConsInjection {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay() {
        $paymentMethod->process();
    }
}