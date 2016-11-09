<?php

class Payment {
    public function processPayment($payments) {
        foreach ($payments as $payment) {
            if ($payment->getType() === 'cash') {
                // process cash payment, count money physically
            } else if ($payment->getType() === 'credit-card') {
                // process credit card payment, consolidate to 3rd party
            }
        }
    }
}