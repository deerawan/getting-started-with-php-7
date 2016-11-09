<?php

require('UserRepository.php');

class UserControllerSRP
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function show($userId)
    {
        $user = $this->userRepository->getById($userId);

        // return view with user data
    }

    public function create($user)
    {

    }
}