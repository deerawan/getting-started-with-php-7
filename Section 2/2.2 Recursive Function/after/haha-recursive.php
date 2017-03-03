<?php

function hahaRecursive($i) {
  // Base condition to stop recursion
  if ($i === 3) {
    return;
  }

  return 'ha' . hahaRecursive(++$i);
}

echo hahaRecursive(0);