<?php

namespace CloudProject\Models;
 use \PDO;

class Api_repo{

  private $db;

  public function __construct($db){
          $this->db=$db;
  }

  public function get_key($key){
    $stmt = $this->db->connection->prepare("SELECT u.id from users AS u
                                            LEFT JOIN api_key AS ak ON ak.client_id = u.id
                                            WHERE ak.client_key ='".$key."' AND u.is_active = 1 AND u.is_client = 1");
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function find_ip($id, $ip){
    $stmt = $this->db->connection->prepare("SELECT ip_adress FROM users_client
                                            WHERE client_id =".$id." AND ip_adress='".$ip."'");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function get_choices($id, $ip){
    $stmt = $this->db->connection->prepare("SELECT user_choice_1, user_choice_2, user_choice_3, user_choice_4 FROM users_client
                                            WHERE client_id =".$id." AND ip_adress='".$ip."'");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  
}