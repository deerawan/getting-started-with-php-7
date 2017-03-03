<?php

$testString = "hello world";

preg_match('/hello/', $testString, $matches);
print_r($matches);

preg_match('/world/', $testString, $matches);
print_r($matches);

preg_match('/l{2}/', $testString, $matches);
print_r($matches);