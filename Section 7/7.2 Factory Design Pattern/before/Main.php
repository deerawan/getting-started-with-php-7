<?php

require_once('DucatiMotorbike.php');
require_once('YamahaMotorbike.php');

// create yamaha
$yamaha = new YamahaMotorbike();
echo $yamaha->getBrand();

// create ducati
$ducati = new DucatiMotorbike();