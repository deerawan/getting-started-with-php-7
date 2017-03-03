<?php

/**
 * Code example how strlen() can't handle unicode character
 * that has multi byte
 */

 $text = 'ベッド'; // japanese of "bed"

 echo mb_strlen($text); // will output 3
 echo strlen($text); // will output 9
