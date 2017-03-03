<?php
declare(strict_types=1);

function send_money(int $a) {
  var_dump($a);
}

send_money(1000); // success
send_money(true); // will throw an error
