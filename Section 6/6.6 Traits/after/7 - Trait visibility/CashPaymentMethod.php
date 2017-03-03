<?php

require 'Notification.php';

class CashPaymentMethod {
    use Notification { notify as private; }
}

$method = new CashPaymentMethod();
$method->notify();