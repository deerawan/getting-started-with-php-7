<?php

class Simple {

}

$mySimple = new Simple();
var_dump($mySimple);

$serialized = serialize($mySimple);
var_dump($serialized);

$unserialized = unserialize($serialized);
var_dump($unserialized);