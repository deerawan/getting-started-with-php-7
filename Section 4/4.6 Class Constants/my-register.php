<?php

class Register
{
    const MIN_USERNAME_LENGTH = 5;
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function validate()
    {
        if (strlen($this->username) >= self::MIN_USERNAME_LENGTH) {
            echo 'username passed';
        } else {
            echo 'username wrong';
        }
    }
}

$reg = new Register('verylongusername');
$reg->validate();
