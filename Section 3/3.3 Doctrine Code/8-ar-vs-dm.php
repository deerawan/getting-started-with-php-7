<?php

$student = new Student;
$student->name = 'Harry';
$student->save();

// versus

$student = new Student;
$student->setName('Harry');
$entityManager->persist($student);
$entityManager->flush();



