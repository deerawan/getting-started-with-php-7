<?php

require('DatabaseUserRepository.php');

class UserController {
    public function processUser(DatabaseUserRepository $repository) {
        $repository->saveUser();
    }
}

$controller = new UserController();
$controller->processUser(new DatabaseUserRepository());