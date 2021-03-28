<?php
require_once '../vendor/autoload.php';

use CloudProject\Controllers\DotEnv;

(new DotEnv('../.env'))->load();

//echo getenv('APP_ENV');

$app = new \Slim\App();
$container = $app->getContainer();
$container['pdo'] = function () {
  $pdo = new PDO(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'), [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  return $pdo;
};



//Homepage
$app->get('/', function(\Slim\Http\Request $request, \Slim\Http\Response $response){
  $req = $this->get('pdo')->prepare('SELECT * FROM users');
  $req->execute();
  $posts = $req->fetchAll();
  var_dump($posts);
  return $response->write('Toto fait du vélo');
});


//login
$app->get('/login', function(\Slim\Http\Request $request, \Slim\Http\Response $response){
  $req = $this->get('pdo')->prepare('SELECT * FROM users');
  $req->execute();
  $posts = $req->fetchAll();
  var_dump($posts);
  return $response->write('Toto fait du vélo');
});

$app->run();