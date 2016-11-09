<?php

$dsn = 'mysql:host=127.0.0.1;dbname=musica';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    echo 'Connected';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}