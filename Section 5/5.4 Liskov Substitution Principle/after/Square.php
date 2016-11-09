<?php

require('Shape.php');

class Square implements Shape
{
    protected $sideLength;

    public function setSideLength($sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function calculateArea()
    {
        return $this->sideLength * $this->sideLength;
    }
}

$mySquare = new Square();
$mySquare->setSideLength(3);
echo 'Square: ' . $mySquare->calculateArea() . PHP_EOL;