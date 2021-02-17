<?php
require_once 'resources/lib/database.php';

function getByName($name)
{
    $db = new Database();
    $pdo = $db->conn;
    $users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";

    $requiredUser = null;
    foreach ($users as $user) {
        if ($user['name'] == $name) {
            $requiredUser = $user;
            break;
        }
    }
    return $requiredUser;
}
