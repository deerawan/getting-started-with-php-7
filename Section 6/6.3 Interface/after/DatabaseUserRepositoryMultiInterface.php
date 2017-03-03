<?php

require('UserRepository.php');
require('GoodRepository.php');

class DatabaseUserRepository implements UserRepository, GoodRepository {
    public function listUser() {
        echo 'list user to DB';
    }

    public function saveUser() {
        echo 'save user to DB';
    }

    public function updateUser() {
        echo 'update user to DB';
    }

    public function deleteUser() {
        echo 'delete user to DB';
    }

    public function thisIsGood() {
        echo 'good repository';
    }
}