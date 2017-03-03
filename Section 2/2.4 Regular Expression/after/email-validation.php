<?php

function validateEmail($text) {
  $emailPattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";

  if (preg_match($emailPattern, $text)) {
    return true;
  }

  return false;
}

var_dump(validateEmail('user@yopmail.com'));
var_dump(validateEmail('hahaha'));