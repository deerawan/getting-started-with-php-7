<?php

$currentDateTime = new DateTime();
echo $currentDateTime->date;
var_dump($currentDateTime);

$currentDateTime = new DateTime();
$result = $currentDateTime->format('d-M-Y H:i:s');
var_dump($result);

$date = new DateTime('2000-01-01 13:25:30');
var_dump($date);

// Custom date time string format
$date = DateTime::createFromFormat('d, m, Y', '20, 05, 2016');
var_dump($date);

// Timezone
$date = new DateTime(null, new DateTimeZone('Asia/Jakarta'));
var_dump($date);
