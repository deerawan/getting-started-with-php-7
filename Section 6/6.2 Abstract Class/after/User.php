<?php

abstract class User {
    protected $name;
    protected $email;

    abstract protected function setName($name);

    public function setEmail($email) {
        echo 'email is set';
    }
}