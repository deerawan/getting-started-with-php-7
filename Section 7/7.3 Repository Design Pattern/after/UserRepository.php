<?php

require_once('User.php');

interface UserRepository {
    public function add(User $user);
    public function find($name);
    public function findAll();
    public function remove($name);
}