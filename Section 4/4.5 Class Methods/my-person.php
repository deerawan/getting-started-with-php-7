<?php

class Person
{
    public function getName()
    {
        echo 'my name';
    }

    function getBirthday()
    {
        echo 'my birthday';
        $this->getSpouseName();
    }

    protected function getSpouseName()
    {
        echo 'my spouse name';
    }
}

$john = new Person();
$john->getName();
$john->getBirthday();
// $john->getSpouseName();