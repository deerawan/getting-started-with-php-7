<?php

$laptop = new class('Macbook Pro') {
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayName()
    {
        echo 'Name is ' . $this->name;
    }
};

$laptop->displayName();

