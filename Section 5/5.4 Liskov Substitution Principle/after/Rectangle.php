<?php

require('Shape.php');

class Rectangle implements Shape
{
    protected $height;
    protected $width;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

$myRectangle = new Rectangle();
$myRectangle->setWidth(3);
$myRectangle->setHeight(2);
echo 'Rectangle: ' . $myRectangle->calculateArea() . PHP_EOL;