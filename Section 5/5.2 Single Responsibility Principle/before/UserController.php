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

        // return view with user data
    }

    public function create($user)
    {

    }
}