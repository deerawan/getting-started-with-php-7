<?php

require 'Notification.php';

class CashPaymentMethod {
    use Notification;
}

$method = new CashPaymentMethod();
$method->notify();