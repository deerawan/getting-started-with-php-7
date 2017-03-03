<?php

$startDate = new DateTime('2016-01-01');
$interval = new DateInterval('P1M');
$recurrences = 5;

$period = new DatePeriod($startDate, $interval, $recurrences);

foreach ($period as $date) {
    echo $date->format('Y-m-d')."\n";
}