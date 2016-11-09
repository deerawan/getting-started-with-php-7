<?php

require 'vendor/autoload.php';

try {
    $connParams = [
      'url' => 'mysql://root@localhost/college'
    ];
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connParams);

    $id = 1;
    $gender = 'm';

    $queryBuilder = $conn->createQueryBuilder();
    $queryBuilder->select('*')
                 ->from('student')
                 ->where('id = ?')
                 ->setParameter(0, $id);

    if (!empty($gender)) {
      $queryBuilder->andWhere('gender = ?')
                   ->setParameter(1, $gender);
    }

    $statement = $queryBuilder->execute();

    $results = $statement->fetchAll();

    foreach($results as $row) {
      print_r($row);
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}