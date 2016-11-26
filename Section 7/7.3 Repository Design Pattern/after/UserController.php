<?php

require_once('UserRepository.php');
require_once('DbUserRepository.php');

class UserController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show($name)
    {
        $user = $userRepository->find($name);

        if ($user.getRole() === 'admin') {
            // do something cool with admin
        } else if ($user.getRole() === 'student') {
            // do something awesome with student
        }

        // return view with user data
    }

    public function create($user)
    {

    }
}

// $controller = new UserController(new DbUserRepository());
$controller = new UserController(new MemoryUserRepository());