<?php
/**
 * Demonstrate connect to redis
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');
}
catch (RedisException $e) {
  echo 'wrong connection';
}