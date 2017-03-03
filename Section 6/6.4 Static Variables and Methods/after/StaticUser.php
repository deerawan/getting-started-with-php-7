<?php

class User {
    static $login;
}

$userA = new User();
User::$login = 'true';

$userB = new User();
User::$login = 'false';

echo 'user A Login: ' . User::$login . PHP_EOL;
echo 'user B Login: ' . User::$login . PHP_EOL;