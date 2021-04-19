<?php
namespace CloudProject\Controllers;

use CloudProject\Controllers\{DotEnv};
class Auth{
  public $repo;
	
  public function __construct($repo){
		$this->repo = $repo;
  }

  public function getLogin(){
      require_once "Views/Login.php";
  }
  public function Logout(){
		session_unset();
    header('Location:?url=index');
  }
  public function getRegister(){
    require_once "Views/register.php";
  }
  public function getBackoffice(){
		if($_SESSION['id']){
			$id=$_SESSION['id'];
			$path=$this->repo->get_path($id);
			var_dump($path);
			require_once "Views/backoffice.php";
		
		}else{
			die();
		}
  }


	public function setRegister($datas){

		$is_already_registered = $this->repo->isAlreadyUser();
		if(!array_key_exists($datas['mail'], $is_already_registered) && filter_var($datas['mail'], FILTER_VALIDATE_EMAIL) && strlen($datas['password']) > 3 && $datas['company_name']){
			$datas["ip_adress"]= $_SERVER['REMOTE_ADDR'];
			$datas["creation_date"] = date("Y-m-d H:i:s", strtotime("now"));
			$datas["is_active"] = 1;
			$datas["is_client"] = 0;
			$datas["password"] = password_hash($datas["password"], PASSWORD_DEFAULT);
			
		
			
			$id_client = $this->repo->insert_user($datas);
			$client_key = $this->create_key($id_client);
			

			$company=$this->repo->get_company($id_client);
			$path="https://localhost/Cloud_Project/src/js/user_script/";
			$file = $path."pop-up-rgpd-".$company["entreprise"].'.js';

			$today = date("Y-m-d",strtotime("now"));
			
		

			$this->repo->insert_key($id_client,	$client_key,$file,$today);
		
			require_once "?url=index";
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

	public function check_user($inputs) {

		if(isset($inputs["login"]) && isset($inputs["password"])){
			$inputs["login"]=htmlspecialchars(trim($inputs['login']));
			$inputs["password"]=htmlspecialchars(trim($inputs['password']));
			$datas=$this->repo->check_auth($inputs["login"]);
				if(isset($datas)){   
					$data=$datas[0];
					if($inputs["login"]===$data["email"] && password_verify($inputs["password"], $data["password"]) && (bool)$data["is_active"]==1){
						
						
					
						$_SESSION["id"] = $data["id"]; 

						if($_SESSION["id"]){
							$this->getBackoffice();
							
						}
					}else{
						echo "<script>alert('Veuillez vous Inscrire')</script>";
						require_once("Views/register.php");
					}
				}
		}
	}
	
	public function create_key($id_client){ // Create Api_key
  
		(new DotEnv('../.env'))->load();
		$secretKey = getenv('SECRET');
	
		$salt = random_int(PHP_INT_MIN, PHP_INT_MAX);
		$signature = hash_hmac('sha256', $salt, $secretKey, true);

		$encodedSignature = base64_encode($signature);

		$encodedSignature = urlencode($encodedSignature);
	
		return $encodedSignature; 
	
    
  	}
	  public function generate($client_id){
		$new_key = $this->create_key($client_id);

		$company=$this->repo->get_company($id);
		$path ="js/user_script/";
		$file = $path."pop-up-rgpd-".$company["entreprise"].'.js';
		$clients_script["client_script_1"]=null;
		$clients_script["client_script_2"]=null;
		$clients_script["client_script_3"]=null;
		$clients_script["client_script_4"]=null;

		$today = date("Y-m-d",strtotime("now"));
		$this->generate_script($client_id,$new_key,$file);
		$this->repo->update_key($client_id, $new_key,$file,$clients_script,$today);

	  }
	  public function generate_script($id,$key,$file){
		
		if(file_exists($file)){
			unlink($file);
		}
		$current = file_get_contents($file);
		$current= '
		
		function get_ip(){
			fetch("https://api.my-ip.io/ip.json")
			.then((response) => response.json())
				.then((data) => {
				  var ip_adress = data["ip"];
				  get_infos(ip_adress);
				});
		  }
	
		function get_infos(ip_adress){
			fetch("http://localhost/cloud_project/src/?url=apiV1/apikey='.$key.'/ip_adress= ip_adress")
				.then((response) => response.json())
				.then((data) => {
					console.log(data);
					if(data.unknown){
					create_button(data)
					}else if(data.erreur){
					console.log(data.erreur);
					}else{
						choices = data.choices;
						console.log(choices);
						if(parseInt(choices.user_choice_1, 10) === 1){
							console.log("Ok pour googleAds");
						}
						if(parseInt(choices.user_choice_2, 10) === 1){
							console.log("Ok pour googleAnalytics");
						}
						if(parseInt(choices.user_choice_3, 10) === 1){
							console.log("Ok pour autres");
						}
						if(parseInt(choices.user_choice_4, 10) === 1){
							console.log("Ok pour autres+1");
						}
					}
			});
		}
		get_ip();
		function get_form(datas){
			var strWindowFeatures = "width=500,height=600,directories=no,titlebar=no,toolbar=no,menubar=no,location=no,status=no,resizable=no,scrollbars=yes";
			popup = window.open("http://localhost/cloud_project/src/?url=apiV1/get_form/"+"id="+datas.client_id+"/ip_adress="+datas.unknown, "_blank", strWindowFeatures);
		}
		function create_button(datas){
			var button = document.createElement("button");
			button.setAttribute("type", "button");
			button.onclick = get_form(datas);
			document.body.append(button);
			button.click();
			button.remove();
		}';
		file_put_contents($file, $current);
	  }
	  

} //END CLASS