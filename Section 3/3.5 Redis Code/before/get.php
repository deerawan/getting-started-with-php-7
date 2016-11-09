<?php
/**
 * Demonstrate get redis value
 */

require 'vendor/autoload.php';

try {
  $redis = new Redis();
  $redis->connect('127.0.0.1');

  $redis->set('hello', 'world');

  $message = $redis->get('hello');

  echo 'message: ' . $message;
}
catch (RedisException $e) {
  echo 'wrong connection';
}