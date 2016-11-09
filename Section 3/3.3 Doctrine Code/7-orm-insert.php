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

    $student = new Student;
    $student->setName('Harry');
    $entityManager->persist($student);
    $entityManager->flush();


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}