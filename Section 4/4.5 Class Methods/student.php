<?php

require 'person.php';

class Student extends Person
{
    public function introduce()
    {
        $this->getSpouseName();
    }
}

$lisa = new Student();
$lisa->introduce();