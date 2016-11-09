<?php

$dsn = 'mysql:host=127.0.0.1;dbname=college';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);

    // USE GENDER INSTEAD OF ID
    $id = 1;
    $statement = $conn->prepare('SELECT * FROM student WHERE id = :id');
    $statement->bindParam(':id', $id);
    $statement->execute();

    $results = $statement->fetchAll();

    foreach($results as $row) {
      print_r($row);
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}