<?php

function setMarried(bool $married) {
  var_dump($married);
}

// will output bool(true)
setMarried(true);
setMarried(1);
setMarried("hello");

 // will output bool(false)
setMarried(false);
setMarried(0);
setMarried("");
// setMarried([]); guess the output :)
