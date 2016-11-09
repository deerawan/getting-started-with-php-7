<?php

require('Rectangle.php');

class Square extends Rectangle {
    protected $height;
    protected $width;

    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }
}


$myRectangle = new Rectangle();
$myRectangle->setWidth(3);
$myRectangle->setHeight(2);
echo 'Rectangle: ' . $myRectangle->calculateArea() . PHP_EOL;

$mySquare = new Square();
$mySquare->setWidth(3);
echo 'Square: ' . $mySquare->calculateArea() . PHP_EOL;
