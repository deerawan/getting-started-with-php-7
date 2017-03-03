<?php

$startDate = new DateTime('2000-01-01 13:00:00');
$endDate = new DateTime('2005-01-01 13:00:00');

if ($startDate < $endDate) {
  echo 'start date < end date';
}