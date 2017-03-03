<?php

// using object
$math = new Math();
$math->sum(10, 20);

// better with static
Math::sum(10, 20);