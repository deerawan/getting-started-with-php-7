<?php

require_once('Notification.php');
require_once('Verification.php');

trait NotificationVerification {
    use Notification, Verification;
}