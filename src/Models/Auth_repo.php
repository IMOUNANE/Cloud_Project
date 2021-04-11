<?php
namespace CloudProject\Models;
 use \PDO;

class Auth_repo{
    private $db;
    public function __construct($db){
            $this->db=$db;
    }

    public function check_auth(array $datas) {
      //ismael login + logout
    }

    public function isAlreadyUser(){
        $stmt = $this->db->connection->prepare("SELECT email FROM users");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert_user(array $datas) {
        $stmt = $this->db->connection->prepare("
         INSERT INTO users (id, password, entreprise, ip_adress, email, creation_date, is_active, is_client) 
         VALUES (NULL, :password, :entreprise, :ip_adress, :email, :creation_date, :is_active, :is_client)
         ");

         $stmt->execute([
             "ip_adress" => $datas["ip_adress"],
             "email" => $datas["mail"],
             "password" => $datas["password"],
             "entreprise" => $datas['company_name'],
             "creation_date" => $datas["creation_date"],
             "is_active" => $datas["is_active"],
             "is_client" => $datas["is_client"]
         ]);


     }
     
}
