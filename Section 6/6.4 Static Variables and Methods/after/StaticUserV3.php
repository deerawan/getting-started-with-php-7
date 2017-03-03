<?php

class User {
    static $login;

    static function amILogin() {
        echo 'login: ' . self::$login;
    }
}

$userA = new User();
User::$login = 'true';

$userB = new User();
User::$login = 'false';
User::amILogin();