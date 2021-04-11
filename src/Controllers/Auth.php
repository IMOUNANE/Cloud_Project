<?php
namespace CloudProject\Controllers;

class Auth{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function setLogin($datas){
      require_once "Views/Login.php";
      $req = $this->repo->check_auth($datas);
      
  }

  public function getRegister(){
      require_once "Views/register.php";
  }

    public function setRegister($datas){
		$is_already_registered = $this->repo->isAlreadyUser();

			if(!array_key_exists($datas['mail'], $is_already_registered) && filter_var($datas['mail'], FILTER_VALIDATE_EMAIL) && strlen($datas['password']) > 3 && $datas['company_name']){
				$datas["ip_adress"]= $_SERVER['REMOTE_ADDR'];
				$datas["creation_date"] = date("Y-m-d H:i:s", strtotime("now"));
				$datas["is_active"] = 1;
				$datas["is_client"] = 0;
				$datas["password"] = password_hash($datas["password"], PASSWORD_DEFAULT);

				$this->repo->insert_user($datas);
				
				echo "<script>alert('Cette adresse e-mail existe déjà')</script>";
				
			}else{
				if(empty($datas['mail'])){
				echo "<script>alert('Pas d'adresse e-mail renseigné')</script>";
				}
				elseif(empty($datas['password'])){
				echo "<script>alert('Pas de mot de passe renseigné')</script>";
				}
				elseif(empty($datas['company_name'])){
				echo "<script>alert('Pas d\'entreprise renseigné')</script>";
				}
				else{
				echo "<script>alert('Cette adresse e-mail existe déjà')</script>";
				}
			}
	}
  
}





