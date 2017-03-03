<?php

require 'Notification.php';
require 'Verification.php';

class CashPaymentMethod {
    use Notification, Verification;
}

$method = new CashPaymentMethod();
$method->notify();
$method->verify();