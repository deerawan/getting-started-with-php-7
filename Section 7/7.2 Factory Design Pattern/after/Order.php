<?php

require_once('MotorbikeFactory.php');

class Order {
    public function createMotorbike($brand) {
        MotorbikeFactory::build($brand);
    }
}