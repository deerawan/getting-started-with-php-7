<?php

require 'Carbon.php';

use Carbon\Carbon;

$date = Carbon::create(2016, 1, 1, 0);

echo $date->addYears(5) . PHP_EOL;
echo $date->subYear() . PHP_EOL;

echo $date->addMonth() . PHP_EOL;

echo $date->subMinute() . PHP_EOL;
echo $date->subMinutes(60);