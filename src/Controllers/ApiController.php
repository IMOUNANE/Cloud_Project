<?php
namespace CloudProject\Controllers;

class ApiController{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function serve_api($get, $post){ //MODELE_API = ?url=apiV1/apikey=fsd6f54sf/ip_adress=172.195.25.12
    $url = $get['url'];
    $parts = explode('/', $url);
    $key_arr = explode('key=', $parts[1]);
    $key = $key_arr[1];
    $ip_adress_arr = explode('ip_adress=', $parts[2]);
    $ip_adress = $ip_adress_arr[1];
    
    if($key){
      $client_id_arr = $this->control_key($key); //Need to return Client ID
      $client_id = $client_id_arr['id'];
      if($client_id){
          if($ip_adress && filter_var($ip_adress, FILTER_VALIDATE_IP)){ //Control we have ip_adress & is valid ip_adress
            $existing_ip = $this->control_ip($client_id, $ip_adress);
            if($existing_ip){ // On vérifie que l'adresse ip est connu pour le client
              $choices = $this->getChoices($client_id, $ip_adress); // On stocke les choix visiteurs pour l'adresse ip du site client
              if(is_array($choices) && !empty($choices) && $choices){
                echo json_encode($choices); // On retourne ces choix utilisateurs (liste des choix à définir)
              }
            }else{
              $unknown = ["unknown" => $ip_adress];
              echo json_encode($unknown); //Le client n'est pas connu on active la pop-up pour récolter les choix utilisateurs.
            }
          }else{
            $error = ["error" => "Missing ip_adress"];
            echo json_encode($error);
          }
      }else{
        $error = ["error" => "Invalid API_Key ?!"];
        echo json_encode($error);
      }
    }else{
      $error = ["error" => "Forget API_Key ?!"];
      echo json_encode($error);
    }
  }

  public function create_key(){ // Create Api_key
    
  }

  public function control_key($key){ // control api_key & return client_ID who are client & active
    $id = $this->repo->get_key($key);
    if($id){
      return $id;
    }else{
      return false;
    }
  }

  public function control_ip($id, $ip){ //Return true ou false if visitor ip exists for client site
    $known_ip = $this->repo->find_ip($id, $ip);
    return $known_ip;
  }

  public function getChoices($id, $ip){ // Return visitor choice for client site
      $choices = $this->repo->get_choices($id, $ip);
      return $choices;
  }

  public function setChoices($id, $ip, $choices){ // Set visitor choices (choices is_array)


  }
}