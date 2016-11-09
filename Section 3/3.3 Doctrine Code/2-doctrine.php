<?php

require 'vendor/autoload.php';

try {
    $connParams = [
      'url' => 'mysql://root@localhost/college'
    ];
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connParams);

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