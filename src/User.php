<?php

namespace App;
use PDO;


class User
{
    public  $pdo;
    public function __construct(){
        $db = new DB();
        $this->pdo = $db->conn;
    }
    public function register(string $full_name, string $email, string $password):bool{
        $query = "INSERT INTO user(full_name, email, password) VALUES (:full_name, :email, :password)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
           ':full_name' => $full_name,
           ':email' => $email,
           ':password' => $password
        ]);
    }

    public  function  login(string $email, string $password):bool|array
    {
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>