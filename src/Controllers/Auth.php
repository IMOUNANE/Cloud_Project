<?php

namespace CloudProject\Controllers;

use CloudProject\Controllers\{DotEnv};
session_save_path("/tmp");
session_start();
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
			if(isset($_SESSION['id'])){
				$id_client=$_SESSION['id'];
				$scripts_paths=$this->repo->get_paths($id_client);
				$script_path = $scripts_paths[0]["script_path"] ?? null;
				$client_script_1 = $scripts_paths[0]['client_script_1'] ?? null;
				$client_script_2 = $scripts_paths[0]['client_script_2'] ?? null;
				$client_script_3 = $scripts_paths[0]['client_script_3'] ?? null;
				$client_script_4 = $scripts_paths[0]['client_script_4'] ?? null;

				require_once "Views/backoffice.php";

			}else{
				require_once "Views/login.php";
				die();
			}
  }

	public function setRegister($datas){

		$is_already_registered = $this->repo->isAlreadyUser();
		
		if(!in_array($datas['mail'], $is_already_registered) && filter_var($datas['mail'], FILTER_VALIDATE_EMAIL) && strlen($datas['password']) > 3 && $datas['company_name']){
			$datas["ip_adress"]= $_SERVER['REMOTE_ADDR'];
			$datas["creation_date"] = date("Y-m-d H:i:s", strtotime("now"));
			$datas["is_active"] = 1;
			$datas["is_client"] = 1;
			$datas["password"] = password_hash($datas["password"], PASSWORD_DEFAULT);
			
			$id_client = $this->repo->insert_user($datas);
			$today = date("Y-m-d",strtotime("now"));
			$this->repo->create_empty_row($id_client, $today);
			$this->mail_provider($datas['mail']);
			
			require_once "Views/login.php";
		}else{
			if(empty($datas['mail'])){
				echo "<script>alert('Pas d'adresse e-mail renseigné')</script>";
				require_once "Views/register.php";
			}
			elseif(empty($datas['password'])){
				echo "<script>alert('Pas de mot de passe renseigné')</script>";
				require_once "Views/register.php";
			}
			elseif(empty($datas['company_name'])){
				echo "<script>alert('Pas d\'entreprise renseigné')</script>";
				require_once "Views/register.php";
			}
			else{
				echo "<script>alert('Cette adresse e-mail existe déjà')</script>";
				require_once "Views/register.php";
			}
		}
	}

	public function mail_provider($email){
		$email = new \SendGrid\Mail\Mail(); 
		$email->setFrom("romain.feregotto@hetic.net", "RGPD - ADMIN");
		$email->setSubject("Bienvenue chez My RGPD");
		$email->addTo($email, "prospect");
		$email->addContent(
				"text/html", '<strong>
				Bonjour !
				Nous avons le plaisir de vous confirmer votre inscription sur MY-RGPD et vous souhaitons la bienvenu.<br><br>
				Vous pouvez dès à présent vous connecter à votre espace et beneficer de l’ensemble de nos services gratuitement pendant sept jours.
				À bientôt 
				
				<a href="http://localhost/cloud_project/src/index.php?url=backoffice">COMMENCER</a>
				</strong>'
		);
		$sendgrid = new \SendGrid(getenv('MAIL_KEY'));
		try {
				$response = $sendgrid->send($email);
		} catch (\Exception $e) {
				echo 'Caught exception: '. $e->getMessage() ."\n";
		}
	}

	public function check_user($inputs) {
		
		if(isset($inputs["login"]) && isset($inputs["password"])){
			$inputs["login"]= trim($inputs['login']);
			$inputs["password"] = trim($inputs['password']);
			$datas=$this->repo->check_auth($inputs["login"]);
				if(isset($datas)){   
					$data=$datas[0];
					if($inputs["login"]===$data["email"] && password_verify($inputs["password"], $data["password"]) && (bool)$data["is_active"]==1){
						$_SESSION["id"] = $data["id"]; 
						if($_SESSION["id"]){
							$this->getBackoffice();	
						}
					}else{
						require_once("Views/register.php");
						echo "<script>alert('Veuillez vous Inscrire')</script>";
					}
				}
		}
	}
	
	public function create_key(){
  
		(new DotEnv('../.env'))->load();

		$secretKey = getenv('SECRET');
		$salt = random_int(PHP_INT_MIN, PHP_INT_MAX);
		$signature = hash_hmac('sha256', $salt, $secretKey, true);
		$encodedSignature = base64_encode($signature);
		$encodedSignature = str_ireplace(["=", "/", "+", "&"], ["z", "5", "t", "k"], $encodedSignature);
	
		return $encodedSignature; 
  }

	public function generate($post){
		$company=$this->repo->get_company($post['client_id']);

		$path ="http://localhost/Cloud_Project/src/js/user_script/";
		$file = $path."pop-up-rgpd-".trim(stripslashes(str_replace([" ", "&", "/", "'", "\"", ",", ".", ";"],["_", "_and_","sl", "ap", "qu", "v", "p", "pv"], htmlspecialchars($company["entreprise"])))).'.js';
		$client_script_1 = $post['script_1'] ?? null;
		$client_script_2 = $post['script_2'] ?? null;
		$client_script_3 = $post['script_3'] ?? null;
		$client_script_4 = $post['script_4'] ?? null;

		$this->generate_script($post['client_id'], $file, $client_script_1, $client_script_2 , $client_script_3, $client_script_4);

	}

	public function generate_script($id_client, $script_path, $client_script_1, $client_script_2 , $client_script_3, $client_script_4){

		$company=$this->repo->get_company($id_client);
		$path="js/user_script/";
		$file = $path."pop-up-rgpd-".trim(stripslashes(str_replace([" ", "&", "/", "'", "\"", ",", ".", ";"],["_", "_and_","sl", "ap", "qu", "v", "p", "pv"], htmlspecialchars($company["entreprise"])))).'.js';
		$api_key = $this->create_key();
		$today = date("Y-m-d",strtotime("now"));

		if(!file_exists($file)){
			
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
				fetch("http://localhost/cloud_project/src/?url=apiV1/apikey='.$api_key.'/ip_adress="+ip_adress)
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

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "'.$client_script_1.'")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_2, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "'.$client_script_2.'")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_3, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "'.$client_script_3.'")
								body.appendChild(script)
							}
							if(parseInt(choices.user_choice_4, 10) === 1){

								body = document.querySelector("body")
								script = document.createElement("script")
								script.setAttribute("src", "'.$client_script_4.'")
								body.appendChild(script)
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
	
			$this->repo->update_key($id_client,	$api_key , $script_path, $client_script_1, $client_script_2, $client_script_3, $client_script_4, $today);
			$this->getBackoffice();
		}else{
			unlink($file);
			$this->generate_script($id_client, $script_path, $client_script_1, $client_script_2 , $client_script_3, $client_script_4);
		}

	}
	  

} //END CLASS