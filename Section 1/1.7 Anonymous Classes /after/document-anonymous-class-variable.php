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
$printer = new class { // assign anonymous class to a variable
    public function print()
    {
        echo 'printing..';
    }
};
$document->setPrinter($printer);
$document->print();
