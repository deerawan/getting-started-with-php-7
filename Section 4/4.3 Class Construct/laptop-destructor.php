<?php

class Laptop
{
    public $ram;
    public $storage;
    public $processor;

    public function __construct() {
        echo 'class is initialized' . PHP_EOL;
    }

    public function displayRam()
    {
        echo 'RAM is ' . $this->ram . PHP_EOL;
    }

    public function __destruct() {
        echo 'class is destroyed' . PHP_EOL;
    }
}

$surface = new Laptop();
$surface->ram = '16gb';
$surface->displayRam();