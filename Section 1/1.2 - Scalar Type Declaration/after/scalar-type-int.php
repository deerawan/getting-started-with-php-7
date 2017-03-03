<?php

function send_money(int $a) {
  var_dump($a);
}

// will output int(100)
send_money(100);
send_money(100.5);
send_money('100');