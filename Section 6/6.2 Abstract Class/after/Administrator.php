<?php

require('User.php');

class Administrator extends User {
    private function setName($name, $nickname = '') {
        echo 'administrator implement this';
    }
}

$admin = new Administrator();

