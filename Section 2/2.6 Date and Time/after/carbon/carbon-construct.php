<?php
require 'Carbon.php';

use Carbon\Carbon;

// get the current time  - 2015-12-19 10:10:54
$current = Carbon::now();
$current = new Carbon();

// get today - 2016-07-11 00:00:00
$today = Carbon::today();

// get yesterday - 2016-07-10 00:00:00
$yesterday = Carbon::yesterday();

// get tomorrow - 2016-07-12 00:00:00
$tomorrow = Carbon::tomorrow();

// parse a specific string - 2016-02-01 00:00:00
$newYear = new Carbon('first day of February 2016');

// set a specific timezone - 2016-01-01 00:00:00
$newYearTimezone = new Carbon('first day of January 2016', 'Asia/Jakarta');