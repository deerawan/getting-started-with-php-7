<?php

require('UserRepository.php');

class TextFileUserRepository implements UserRepository {
    public function listUser() {
        echo 'list user to text file';
    }

    public function saveUser() {
        echo 'save user to text file';
    }

    public function updateUser() {
        echo 'update user to text file';
    }

    public function deleteUser() {
        echo 'delete user to text file';
    }
}