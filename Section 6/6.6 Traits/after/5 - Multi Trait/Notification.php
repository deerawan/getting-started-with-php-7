<?php

trait Notification {
    public function notify() {
        echo 'notify from trait' . PHP_EOL;
    }
}