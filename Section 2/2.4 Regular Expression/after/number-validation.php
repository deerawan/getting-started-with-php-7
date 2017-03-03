<?php

function validateNumber($text) {
  $numberPattern = '/\d/';

  if (preg_match($numberPattern, $text)) {
    return true;
  }

  return false;
}

var_dump(validateNumber('12345'));
var_dump(validateNumber('this is not number'));