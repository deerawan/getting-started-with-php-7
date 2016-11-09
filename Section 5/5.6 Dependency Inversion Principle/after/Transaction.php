<?php

require('TransferPaymentMethod.php');

class Transaction {
    public function pay(PaymentMethod $paymentMethod) {
        $paymentMethod->process();
    }
}

$transferPaymentMethod = new TransferPaymentMethod();
$transaction = new Transaction();
$transaction->pay($transferPaymentMethod);