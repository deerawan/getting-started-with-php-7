<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'collegeyes');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

echo 'Connected at ' . $mysqli->host_info . "\n";

