<?php

class User {
    static $login;
}

$userA = new User();
$userA::$login = 'true';

$userB = new User();
$userB::$login = 'false';

echo 'user A Login: ' . $userA::$login . PHP_EOL;
echo 'user B Login: ' . $userB::$login . PHP_EOL;