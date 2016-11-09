<?php
/**
 * Demonstrate redis list
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');

  $redis->lPush('countries', 'england'); // ['england']
  $redis->lPush('countries', 'china');  // ['china', 'england']
  $redis->rPush('countries', 'hongkong'); // ['china', 'england', 'hongkong']

  print_r($redis->lRange('countries', 0, -1));
  echo 'Size: ' . $redis->lsize('countries');
}
catch (RedisException $e) {
  echo 'wrong connection';
}