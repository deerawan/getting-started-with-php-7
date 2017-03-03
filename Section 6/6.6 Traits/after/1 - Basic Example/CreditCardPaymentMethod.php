<?php

require 'Notification.php';

class CreditCardPaymentMethod {
    use Notification;
}

$method = new CreditCardPaymentMethod();
$method->notify();