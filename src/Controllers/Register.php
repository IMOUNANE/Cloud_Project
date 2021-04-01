<?php
namespace CloudProject\Controllers;

class Register{
  public $repo;
  public function __construct($model){
      $this->model = $model;
  }

  public function setRegister($datas){
    //filter_input($_POST
    $req = $this->model->insert_user($datas);
    require_once "Views/register.php";
  }
}