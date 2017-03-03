<?php

class Document
{
    public function setPrinter($printer)
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print();
    }

    // ... other functions
}

$document = new Document();
$document->setPrinter(new class('Canon IP') {
    public function __construct($printerName) {
      $this->printerName = $printerName;
    }

    public function print()
    {
        echo 'printing..with ' . $this->printerName;
    }
});
$document->print();
