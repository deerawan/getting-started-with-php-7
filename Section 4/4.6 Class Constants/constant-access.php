<?php

class Register {
    const MIN_USERNAME_LENGTH = 5;
}

echo Register::MIN_USERNAME_LENGTH . PHP_EOL;

$className = 'Register';
echo $className::MIN_USERNAME_LENGTH . PHP_EOL;

$register = new Register();
echo $register::MIN_USERNAME_LENGTH . PHP_EOL;
