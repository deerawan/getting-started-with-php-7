<?php
/**
 * Demonstrate redis list
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');

  $redis->sAdd('currencies', 'USD');
  $redis->sAdd('currencies', 'IDR');
  $redis->sAdd('currencies', 'USD');
  $redis->sRem('currencies', 'USD');

  print_r($redis->sMembers('currencies'));
}
catch (RedisException $e) {
  echo 'wrong connection';
}