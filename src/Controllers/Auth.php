<?php
namespace CloudProject\Controllers;

class Auth{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function setLogin($datas){
    header('Location: ./Views/login.php');
    var_dump('toto');
    $req = $this->repo->check_auth($datas);
    return $req;
  }

  public function setRegister($datas){
    //filter_input($_POST
    $req = $this->model->insert_user($datas);
    require_once "Views/register.php";
  }
  
}





