<?php

function printMessage($function) {
  $function();
}

printMessage(function() {
  echo 'Hello';
});