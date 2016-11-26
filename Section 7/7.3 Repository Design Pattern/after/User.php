<?php

class User {
    private $name;
    private $gender;
    private $role;

    public function __construct($name, $gender, $role) {
        $this->name = $name;
        $this->gender = $gender;
        $this->role = $role;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->role;
    }

    public function getRole() {
        return $this->role;
    }
}