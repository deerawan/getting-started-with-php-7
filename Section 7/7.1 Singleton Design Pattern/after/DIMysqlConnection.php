<?php

class MysqlConnection
{
    public function __construct($params)
    {
        $this->conn = new PDO(
            'mysql:host=' . $params['host'] . ';dbname=' . $params['dbName'],
            $params['username'], $params['password']
        );
    }
}

$params = [
    'host' => '127.0.0.1',
    'dbName' => 'musica',
    'username' => 'root',
    'password' => ''
];
$conn = new MysqlConnection($params);

$user = new User($conn);
$administrator = new Administrator($conn);

class User {
    public function __construct(MysqlConnection $conn) {
        $this->conn = $conn;
    }
}

class Administrator {
    public function __construct(MysqlConnection $conn) {
        $this->conn = $conn;
    }
}