<?php
/**
 * Demonstrate redis hash
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');

  $redis->hSet('person', 'name', 'thomas'); // set name attribute in hash person
  echo 'Name: ' . $redis->hGet('person', 'name') . ', ';

  $redis->hSet('person', 'age', '20');
  echo 'Age: ' . $redis->hGet('person', 'age');

  print_r($redis->hGetAll('person'));

  $redis->hdel('person', 'age'); // delete age attribute in hash person

  print_r($redis->hGetAll('person'));
}
catch (RedisException $e) {
  echo 'wrong connection';
}

