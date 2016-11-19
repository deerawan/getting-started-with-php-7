<?php

require('TextFileUserRepository.php');

class UserController {
    public function processUser(UserRepository $repository) {
        $repository->saveUser();
    }
}

$controller = new UserController();
$controller->processUser(new TextFileUserRepository());