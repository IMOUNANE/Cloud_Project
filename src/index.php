<?php
require_once '../vendor/autoload.php';

use CloudProject\Controllers\{DotEnv,Auth,HomeController, ApiController};
use CloudProject\Models\{Auth_repo,Database, Api_repo};

    (new DotEnv('../.env'))->load();

    //DB
    $db = new Database(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'));
    $AuthModel = new Auth_repo($db);
		$ApiModel = new Api_repo($db);
    //Controller
    $AuthController = new Auth($AuthModel);
    $HomeController = new HomeController();

		$ApiController = new ApiController($ApiModel);
    
	$url = null;

	if(isset($_GET["url"]))
	{
		$url = $_GET["url"];
	}

	if ($url == "" || $url == "index")
	{
		$HomeController->home();
	}
	elseif($url == "pricing")
	{
		$HomeController->pricing();
	}
	elseif($url == "login")
	{
		$AuthController->getLogin();
	}
	elseif($url == "checkuser")
	{
		$AuthController->check_user($_POST);
	}
	elseif($url == "logout")
	{
		$AuthController->Logout();
	}
	elseif($url == "backoffice")
	{
		$AuthController->getBackoffice();
	}
	elseif($url == "register")
	{
		$AuthController->getRegister();
	}
	elseif($url == "subscribe")
	{
		$AuthController->setRegister($_POST);
	}
  elseif($url == "client_script")
	{
		$AuthController->generate($_POST);
  }
	elseif($url == str_starts_with($url, "apiV1/"))
	{
		if($url == str_starts_with($url, "apiV1/get_form"))
		{
			$ApiController->serve_form();
		}
		else
		{
			$ApiController->serve_api($_GET);
		}
	}
	elseif($url == "post_ajax")
	{
		$ApiController->setChoices();//Page de traitement de la pop-up client
	}
	else
	{
		echo "404";
	}
	





