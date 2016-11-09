<?php

class Laptop
{
    public $ram;
    public $storage;
    public $processor;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __construct($ram)
    {
        $this->ram = $ram;
    }

    public function displayRam()
    {
        echo 'RAM is ' . $this->ram . PHP_EOL;
    }

    public function displayName()
    {
        echo 'Name is ' . $this->name . PHP_EOL;
    }
}

$macbookPro = new Laptop('Macbook Pro');
$macbookPro->ram = '8gb';
$macbookPro->storage = '128gb';
$macbookPro->processor = '2.7ghz';
$macbookPro->displayName();
$macbookPro->displayRam();

$surface = new Laptop('Microsoft Surface');
$surface->ram = '16gb';
$surface->displayName();
$surface->displayRam();