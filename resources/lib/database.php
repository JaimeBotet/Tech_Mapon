<?php
// This file will contain the function to create the connection with the database. Keep in mind that you must use your previously created database constants in order to connect with your database.
define("HOST", 'localhost');
define("DATABASE", 'maponTest');
define("USER", 'root');
define("PASSWORD", '');
define("CHARSET", 'utf8mb4');

class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public $conn;

    public function __construct()
    {
        $this->host = HOST;
        $this->db = DATABASE;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->charset = CHARSET;
        $this->conn = $this->connect();
    }

    function connect()
    {
        try {
            $connection = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES    => false
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}
