<?php

require 'NotificationVerification.php';

class CashPaymentMethod {
    use NotificationVerification;
}

$method = new CashPaymentMethod();
$method->notify();
$method->verify();