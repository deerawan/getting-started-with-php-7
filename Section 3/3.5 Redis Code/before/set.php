<?php
/**
 * Demonstrate set redis value
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');

  $redis->set('hello', 'world');
  var_dump($redis->exists('hello')); // yield true
}
catch (RedisException $e) {
  echo 'wrong connection';
}