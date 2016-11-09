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
}

$macbookPro = new Laptop();
$macbookPro->ram = '8gb';
$macbookPro->storage = '128gb';
$macbookPro->processor = '2.7ghz';
$macbookPro->displayRam();

$surface = new Laptop();
$surface->ram = '16gb';
$surface->displayRam();