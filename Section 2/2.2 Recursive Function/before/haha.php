<?php

$i = 0;

while($i < 3) {
  echo 'ha';
  $i++;
}

function hahaRecursive($i) {
  if ($i === 3) {
    return;
  }

  return 'ha' . hahaRecursive(++$i);
}

echo hahaRecursive(0);