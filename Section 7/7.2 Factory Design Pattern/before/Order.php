<?php

require_once('DucatiMotorbike.php');
require_once('YamahaMotorbike.php');
// ....3 - 49 motorbikes
require_once('Brand49Motorbike.php');
require_once('Brand50Motorbike.php');

class Order {
    public function createMotorbike($brand) {
        switch($brand) {
            case 'Yamaha':
                return new YamahaMotorbike();
                break;
            case 'Ducati':
                return new DucatiMotorbike();
                break;
            // ....3 - 49 motorbikes
            case 'Brand50':
                return new Brand50Motorbike();
                break;
        }
    }
}