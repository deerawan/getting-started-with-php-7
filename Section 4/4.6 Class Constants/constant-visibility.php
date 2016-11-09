<?php

class Register
{
    const MIN_USERNAME_LENGTH = 5;
    private const PRIVATE_LENGTH = 10;
    protected const PROTECT_LENGTH = 15;
}

// available in PHP 7.1
echo Register::MIN_USERNAME_LENGTH . PHP_EOL;
echo Register::PRIVATE_LENGTH;



