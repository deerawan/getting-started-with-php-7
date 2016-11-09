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
        echo $this->getSpouseName();
    }

    protected function getSpouseName()
    {
        echo 'my spouse name';
    }
}

$john = new Person();
$john->getBirthday(); // will run