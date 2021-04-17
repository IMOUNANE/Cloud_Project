<?php
namespace CloudProject\Controllers;

class ApiController{
  public $repo;
  public function __construct($repo){
      $this->repo = $repo;
  }

  public function serve_api($get, $post){
      if($get['key']){
        $client_id = $this->control_key($get['key']); //Need to return Client ID
        if($client_id){
          try {
            $this->client_ip ;
          } catch (\Throwable $th) {
            throw $th;
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

  public function control_key($key){ // control_api_key & return client_ID
    $id = $this->repo->

    if($key )
    //return $id;
  }

  public function control_ip($id, $ip){ //Return true ou false if visitor ip exists
    
  }

  public function getChoices($id, $ip){ // Return visitor choice for client site
      
  }
}