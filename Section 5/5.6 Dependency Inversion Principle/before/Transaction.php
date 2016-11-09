<?php

require('TransferPaymentMethod.php');

class Transaction {
    public function pay() {
        $transfer = new TransferPaymentMethod();
        $transfer->process();
    }
}

$transaction = new Transaction();
$transaction->pay();