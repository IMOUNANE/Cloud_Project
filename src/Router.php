<?php
namespace CloudProject;

use CloudProject\Controllers\{DotEnv,Auth,HomeController};
use CloudProject\Models\{Auth_repo,Database};





//echo getenv('APP_ENV');
/*

$container = $app->getContainer();
$container['pdo'] = function () {
  $pdo = new PDO(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'), [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  return $pdo;
};

*/
class Router {


  public function __construct(){
    
    (new DotEnv('../.env'))->load();

    //DB
    $this->db = new Database(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'));
    $this->AuthModel= new Auth_repo($this->db); 

    //Controller
    $this->AuthController = new Auth($this->AuthModel);
    $this->HomeController = new HomeController();


    $this->app = new \Slim\App();
   
  }
  //Homepage
  public function getRoute(){

    //Index
    $this->app->get('/', function(\Slim\Http\Request $request, \Slim\Http\Response $response){
      $this->HomeController->home();
    
    });
    //Login
    $this->app->get('/login', function(\Slim\Http\Request $request, \Slim\Http\Response $response){
      $this->AuthController->setLogin($_POST);  
    
    });
    //Logout
    $this->app->get('/logout', function(\Slim\Http\Request $request, \Slim\Http\Response $response){

    });


    $this->app->run();
  }
  
  
}





