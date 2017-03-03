<?php

$startDate = new DateTime('2000-01-01 13:00:00');
$endDate = clone $startDate;
$endDate->sub(new DateInterval('P1Y2M'));

var_dump($endDate);
