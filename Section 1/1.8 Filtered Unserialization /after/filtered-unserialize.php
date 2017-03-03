<?php

class Car
{
    public function setColor($color) {
        $this->color = $color;
    }
}

class Motorcycle
{
    public function setBrand($brand) {
        $this->brand = $brand;
    }
}

$car = new Car();
$car->setColor('black');
$motorcycle = new Motorcycle();
$motorcycle->setBrand('Suzuki');

$serialized = serialize([$car, $motorcycle]);
var_dump($serialized);
var_dump(unserialize($serialized, ['allowed_classes' => ['Car']]));