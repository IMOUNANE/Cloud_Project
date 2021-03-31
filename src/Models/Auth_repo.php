<?php
namespace CloudProject\Models;
 use Database;

class Auth_repo{
    private $db;
    public function __construct($db){
            $this->db=$db;
    }
    public function insert_user(array $datas) {
       $stmt->prepare("
        INSERT INTO users (id, login, password, ip_adress,email,creation_date,is_active,is_client) 
        VALUES (NULL, :login, :password, :ip_adress,:email,:creation_date,:is_active,:is_client)
        ");
        $this->db->$stmt->execute([
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
