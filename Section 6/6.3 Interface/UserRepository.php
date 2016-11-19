<?php

interface UserRepository {
    function listUser();
    function saveUser();
    function updateUser();
    function deleteUser();
}