<?php

require 'vendor/autoload.php';
require 'entities/Student.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

try {
    $connParams = [
      'url' => 'mysql://root@localhost/college'
    ];
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connParams);

    $paths = array("entities");
    $isDevMode = true;
    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $entityManager = EntityManager::create($conn, $config);

    $id = 1;
    $studentRepo = $entityManager->getRepository('Student');
    $student = $studentRepo->find($id);

    var_dump($student);

    echo $student->getName();

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}