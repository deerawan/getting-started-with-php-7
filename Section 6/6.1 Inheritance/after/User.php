<?php

class User {
    protected $name;
    protected $email;

    final public function setEmail($email) {
        echo 'email is set';
    }
}
