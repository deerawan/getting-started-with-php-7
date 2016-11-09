<?php

$dsn = 'mysql:host=127.0.0.1;dbname=college';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);

    $id = 1;
    $statement = $conn->prepare('SELECT * FROM student WHERE id = ? AND gender = ? AND age = ? AND address = ?');
    $statement->execute(array($id, 'm', 17, 'streetville'));
    $results = $statement->fetchAll();

    foreach($results as $row) {
      print_r($row);
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}