<?php

class Person
{
    public function getName()
    {
        echo 'my name';
    }

    private function getBirthday()
    {
        echo 'my birthday';
    }

    protected function getSpouseName()
    {
        echo 'my spouse name';
    }
}

// $john = new Person();
// $john->getName();
// $john->getBirthday(); // error
// $john->getSpouseName(); // error