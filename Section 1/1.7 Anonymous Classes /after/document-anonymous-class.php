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
$document->setPrinter(new class {
    public function print()
    {
        echo 'printing..';
    }
});
$document->print();
