<?php

class UserRepository
{
    // ... construct $conn

    public function getById($userId)
    {
        $statement = $conn->prepare('SELECT * FROM user WHERE id = ?');
        $statement->execute(array($userId));
        $user = $statement->fetch();

        return $user;
    }

    public function getAll()
    {
        // get all users
    }

    public function create()
    {
        // create new user
    }
}