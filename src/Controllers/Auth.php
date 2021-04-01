<?php
namespace CloudProject\Controllers;

class Auth{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function setLogin($datas){
    //filter_input($_POST
    $req = $this->repo->check_auth($datas);
  }
}





