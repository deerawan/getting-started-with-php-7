<?php

require_once('User.php');
require_once('UserRepository.php');

class MemoryUserRepository implements UserRepository {
    private $users;

    public function __construct() {
        $this->users = [];
    }

    public function add(User $user) {
        $this->users[$user->getName()] = $user;
    }

    public function find($name) {
        return $this->users[$name];
    }

    public function findAll() {
        $users = [];

        foreach($this->users as $user) {
            array_push($users, $user);
        }

        return $users;
    }

    public function remove($name) {
        unset($this->users[$name]);
    }
}

$repository = new MemoryUserRepository();
$userA = new User('dimas', 'm', 'admin');
$userB = new User('logo', 'm', 'student');
$repository->add($userA);
$repository->add($userB);

var_dump($repository->findAll());

