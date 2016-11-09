<?php

class Laptop
{
    private $ram;
    public $storage;
    public $processor;

    public function setRam($ram) {
      $this->ram = $ram;
    }

    public function getRam() {
      return $this->ram;
    }
}

$macbookPro = new Laptop();
$macbookPro->setRam('8gb');
echo $macbookPro->getRam();