<?php

$scores = [20, 35, 50, 76, 98, 100];

$result = array_filter($scores, function($score) {
  return $score > 50;
});

print_r($result);

