<?php
namespace CloudProject\Controllers;

class ApiController{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function serve_api($get, $post){ //?url=apiV1&apikey=fsd6f54sf&ip_adress=172.195.25.12
      //Découper l'url 

      if($get['key']){
        $client_id = $this->control_key($get['key']); //Need to return Client ID
        if($client_id){
          try {
            if($get['ip_adress']){ //On vérifie qu'on a bien une adresse ip
              $existing_ip = $this->control_ip($client_id, $get['ip_adress']);

              if($existing_ip){ // On vérifie que l'adresse ip est connu pour le client
                $choices = array();
                $choices[] = $this->getChoices($client_id, $get['ip_adress']); // On stocke les choix visiteurs pour l'adresse ip du site client

                if(is_array($choices)){
                  return json_encode($choices); // On retourne ces choix utilisateurs (liste des choix à définir)
                }
              }else{
                return false; //Le client n'est pas connu on active la pop-up pour récolter les choix utilisateurs.
              }
            }else{
              echo "Missing ip_adress";
            }
          } catch (\Throwable $th) {
            throw $th; // Une erreur à été détecté.
          }
        }else{
          echo "Invalid API_Key ?!";
        }
      }else{
        echo "Forget API_Key ?!";
      }
  }

  public function create_key(){ // Create Api_key

  }

  public function control_key($key){ // control api_key & return client_ID who are client & active

    //"SELECT u.id from USERS AS u
    // LEFT JOIN api_key AS ak ON ak.client_id = u.id
    // WHERE ak.client_key =".$key."  u.active = 1 AND u.is_client = 1";
    $id = $this->repo->get_key($key);

    if($id){
      return $id;
    }else{
      return false;
    }
  }

  public function control_ip($id, $ip){ //Return true ou false if visitor ip exists
    
  }

  public function getChoices($id, $ip){ // Return visitor choice for client site
      
  }

  public function setChoices($id, $ip, $choices){ // Set visitor choices (choices is_array)


  }
}