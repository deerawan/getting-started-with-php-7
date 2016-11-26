<?php

require_once('User.php');
require_once('UserRepository.php');

class DbUserRepository implements UserRepository {
    public function add(User $user) {
        // add User to database
    }

    public function find($name) {
        // find user by name in database

        // return User
    }

    public function findAll() {
        // return array of Users
    }

    public function remove($name) {
        // remove user in database
    }
}