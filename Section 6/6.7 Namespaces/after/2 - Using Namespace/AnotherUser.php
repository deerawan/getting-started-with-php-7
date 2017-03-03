<?php

namespace Backend;

class User {
    public function __construct($name) {
        echo $name . ' inside namespace' . PHP_EOL;
    }
}