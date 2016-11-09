<?php

require 'vendor/autoload.php';

try {
    $connParams = [
      'url' => 'mysql://root@localhost/college'
    ];
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connParams);

    $id = 1;

    $queryBuilder = $conn->createQueryBuilder();
    $queryBuilder->select('*')
                 ->from('student')
                 ->where('id = ?')
                 ->setParameter(0, $id);
    $statement = $queryBuilder->execute();

    $results = $statement->fetchAll();

    foreach($results as $row) {
      print_r($row);
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}