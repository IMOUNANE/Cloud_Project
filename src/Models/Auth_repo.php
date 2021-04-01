<?php
namespace CloudProject\Models;
 use Database;

class Auth_repo{
    private $db;
    public function __construct($db){
            $this->db=$db;
    }
    public function check_auth(array $datas) {
      
    }
}
