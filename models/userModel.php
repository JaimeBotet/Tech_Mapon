<?php
require_once 'resources/lib/database.php';

function getByName($name)
{
    $db = new Database();
    $pdo = $db->conn;
    $requiredUser = null;
    $requiredUser = $pdo->query("SELECT * FROM users WHERE name=$name")->fetchAll(PDO::FETCH_ASSOC);

    return $requiredUser;
}
