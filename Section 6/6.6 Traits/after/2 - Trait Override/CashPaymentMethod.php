<?php

require 'Notification.php';

class CashPaymentMethod {
    use Notification;

    public function notify() {
        echo 'notify from cash payment method';
    }
}

$method = new CashPaymentMethod();
$method->notify();