<?php

require('User.php');

class Administrator extends User {

}

$admin = new Administrator();
$admin->setEmail('email');
