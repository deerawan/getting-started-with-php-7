<?php

class Laptop
{
    private $ram;
    public $storage;
    public $processor;

    public function setRam($ram) {
      if (!is_int($ram)) {
        throw new Exception('RAM must be integer');
      }
      $this->ram = $ram;
    }

    public function getRam() {
      return $this->ram;
    }
}

$macbookPro = new Laptop();
$macbookPro->setRam('8gb');
echo $macbookPro->getRam();