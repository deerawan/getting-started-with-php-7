<?php

require 'Notification.php';
require 'PaymentMethod.php';

class CashPaymentMethod extends PaymentMethod {
    use Notification;
}

$method = new CashPaymentMethod();
$method->notify();