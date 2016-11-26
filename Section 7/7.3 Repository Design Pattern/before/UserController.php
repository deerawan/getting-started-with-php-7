<?php

class UserController
{
    public function __construct()
    {
        // some stuff
    }

    public function show($userId)
    {
        $id = 1;
        $statement = $conn->prepare('SELECT * FROM user WHERE id = ?');
        $statement->execute(array($userId));
        $user = $statement->fetch();

        if ($user['role'] === 'admin') {
            // do something cool with admin
        } else if ($user['role'] === 'student') {
            // do something awesome with student
        }

        // return view with user data
    }

    public function create($user)
    {

    }
}