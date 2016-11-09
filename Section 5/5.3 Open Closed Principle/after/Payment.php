<?php

require_once ('./CashPaymentMethod.php');
require_once ('./CreditCardPaymentMethod.php');

class Payment {
    public function processPayment($payments) {
        foreach ($payments as $payment) {
            $payment->processPayment();
        }
    }
}

$payments = [];
array_push($payments, new CashPaymentMethod());
array_push($payments, new CreditCardPaymentMethod());
array_push($payments, new CreditCardPaymentMethod());

$payment = new Payment();
$payment->processPayment($payments);