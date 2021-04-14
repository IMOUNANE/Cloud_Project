<?php

require_once '../vendor/autoload.php';

use CloudProject\Controllers\{DotEnv,Auth,HomeController};
use CloudProject\Models\{Auth_repo,Database};

    (new DotEnv('../.env'))->load();

    //DB
    $db = new Database(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'));
    $AuthModel = new Auth_repo($db);
    //Controller
    $AuthController = new Auth($AuthModel);
    $HomeController = new HomeController($AuthModel);
    
	$url = null;

	if(isset($_GET["url"])){
		$url = $_GET["url"];
	}

	if ($url == "" || $url == "index")
	{
		$HomeController->home();
	}
	elseif($url == "login")
	{
		$AuthController->getLogin();
	}
	elseif($url == "checkadmin")
	{
		$AuthController->setbackOffice($_POST);
	}
	elseif($url == "logout")
	{
		$AuthController->getLogout();
	}
	elseif($url == "register")
	{
		$AuthController->getRegister();
	}
	elseif($url == "subscribe")
	{
		$AuthController->setRegister($_POST);
	}
	





