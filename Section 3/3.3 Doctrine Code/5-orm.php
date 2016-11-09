<?php

$statement = $conn->prepare('SELECT * FROM student WHERE id = :id');
$statement->bindParam(':id', $id);
$statement->execute();


// vs

$student = $entityManager->find('Student', $id);





