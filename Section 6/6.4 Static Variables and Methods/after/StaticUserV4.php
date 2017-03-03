<?php

class User {
    static $login;
    private $name = 'thomas';

    static function amILogin() {
        // echo 'my name is ' . $this->getName();
        echo 'login: ' . self::$login;
    }

    public function getName() {
        echo self::amILogin();
        return $this->name;
    }
}

$userA = new User();
User::$login = 'true';
$userA->getName();

// $userB = new User();
// User::$login = 'false';
// User::amILogin();