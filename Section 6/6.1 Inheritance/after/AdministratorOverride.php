<?php

require('User.php');

class Administrator extends User {
    public function setEmail($email) {
        echo 'administrator email is set';
    }
}

$admin = new Administrator();
$admin->setEmail('email');
