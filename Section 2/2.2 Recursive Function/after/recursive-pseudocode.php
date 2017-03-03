<?php

function recursiveFunction() {
  if (baseCondition) {
    return; // stop recursion
  }

  recursiveFunction(); // continue recursion
}