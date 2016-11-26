<?php

require_once('MotorbikeFactory.php');

$ducati = MotorbikeFactory::build('Ducati');
echo $ducati->getBrand();

$ducati = MotorbikeFactory::build('Yamaha');