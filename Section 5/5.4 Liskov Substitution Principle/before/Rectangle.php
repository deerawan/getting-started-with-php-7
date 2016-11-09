<?php

class Rectangle
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