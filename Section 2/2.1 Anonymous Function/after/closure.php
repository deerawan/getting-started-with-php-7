<?php

$counter = 0;

// We pass $counter here
$closure = function () use ($counter) {
  return ++$counter;
};

echo $closure();
echo $counter;
