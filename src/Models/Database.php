<?php

namespace CloudProject\Models;

use \PDO;

class Database{

    public $connection;

    function __construct($dsn, $user, $password){
        try {        
            $this->connection = new PDO($dsn, $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (\PDOException $e) {
            die('Impossible de se connecter au serveur MySQL: ' . $e->getMessage());
        }
    }

    public function insert_user(array $datas) {
        $stmt->prepare("
        INSERT INTO users (id, login, password, ip_adress,email,creation_date,is_active,is_client) 
        VALUES (NULL, :login, :password, :ip_adress,:email,:creation_date,:is_active,:is_client)
        ");
        $stmt->execute([
            "login" => $datas["login"],
            "ip_adress" => $datas["ip_adress"],
            "email" => $datas["email"],
            "password" => $datas["password"],
            "creation_date" => $datas["creation_date"],
            "is_active" => $datas["is_active"],
            "is_client" => $datas["is_client"]
        ]);
    }
}