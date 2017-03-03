<?php

// display current date and time (UTC)
$date = date('Y-m-d H:i:s');
var_dump($date);

// Using another timezone
date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d H:i:s');
var_dump($date);