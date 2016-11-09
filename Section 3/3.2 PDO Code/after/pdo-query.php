<?php

$dsn = 'mysql:host=127.0.0.1;dbname=college';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);

    $results = $conn->query('SELECT * from student');

    foreach($results as $row) {
      print_r($row);
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}