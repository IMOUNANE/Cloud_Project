<?php
namespace CloudProject\Models;
 use \PDO;

class Auth_repo{
    private $db;
    
    public function __construct($db){
        $this->db=$db;
    }

    public function check_auth($email) {
        $stmt = $this->db->connection->prepare("SELECT id,email,password,is_active FROM users WHERE email =:email");
        $stmt->execute(array("email" =>$email));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $result;
    }

    public function isAlreadyUser(){
        $stmt = $this->db->connection->prepare("SELECT email FROM users");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function get_company($id){
        $stmt = $this->db->connection->prepare("SELECT entreprise FROM users WHERE id=".$id);
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

        $id_client = $this->db->connection->lastInsertId();
        return $id_client;
        
     }
     public function insert_key($id_client,$key,$path,$today){
        $stmt = $this->db->connection->prepare("
        INSERT INTO api_key (client_id, client_key,script_path,last_modification) 
        VALUES (:client_id, :client_key,:script_path,:last_modification)
        ");
        
        $stmt->execute([
            "client_id"=>$id_client,
            "client_key" => $key,
            "script_path"=>$path,
            "last_modification"=>$today,
        ]);
     }
     public function get_key($id){

        $stmt = $this->db->connection->prepare("SELECT client_id,client_key FROM api_key WHERE client_id =:client_id");
        $stmt->execute(array("client_id" =>$id));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]["client_key"];

     }
     public function update_key($id, $key,$path, $client_script_1, $client_script_2, $client_script_3, $client_script_4,$today){
        $stmt = $this->db->connection->prepare("UPDATE api_key SET client_key=:client_key,script_path,client_script_1,client_script_2,client_script_3,client_script_4, last_modification  WHERE client_id= :client_id");
       
        $stmt->execute([
            "client_id" =>$id,
            "client_key" =>$key,
            "script_path"=>$path,
            "client_script_1"=>$client_script_1,
            "client_script_2"=>$client_script_2,
            "client_script_3"=>$client_script_3,
            "client_script_4"=>$client_script_4,
            "last_modification"=>$today
        ]);
     }
     public function get_paths($id){
        $stmt = $this->db->connection->prepare("SELECT script_path, client_script_1, client_script_2, client_script_3,client_script_4 FROM api_key WHERE client_id = :client_id");
        $stmt->execute([
            "client_id" =>$id,
        ]);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
     }
     

     
}
