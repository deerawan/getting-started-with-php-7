<?php

require_once('DucatiMotorbike.php');

class MotorbikeFactory {
    public static function build() {
        return new DucatiMotorbike();
    }
}

class Order {
    public function createMotorbike() {
        MotorbikeFactory::build();
    }
}
