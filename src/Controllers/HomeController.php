<?php

namespace CloudProject\Controllers;

class HomeController
{
    public $repo;
    public function __construct($repo){
        $this->repo = $repo;
    }
    public function home() {
        require_once 'Views/homepage.php';
    }

    public function backOffice($inputs) {

        $inputs["login"]=htmlspecialchars(trim($inputs['login']));
        $inputs["password"]=htmlspecialchars(trim($inputs['password']));

       

        if(isset($inputs["login"]) && isset($inputs["password"])){
           $datas=$this->repo->check_auth($inputs["login"]);
           
            if(isset($datas)){
               
               
                var_dump($data["is_active"]);
                if($inputs["login"]===$datas["email"] && password_verify($inputs["password"], $datas["password"]) && (bool)$datas["is_active"]===1){

                    require_once 'Views/backoffice.php';
                }else{
                    //echo "<script>alert('Mot de passe incorect veuillez réessayer')</script>";
                    //header("refresh:0;?url=login");
                    echo "erreur";
                }
            }else{
                echo "<script>alert('Veuillez vous Inscrire')</script>";
                header("location: ?url=register");
            }
            
           
        }
       
        
        
    }

}

?>