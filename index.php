<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "OK";

});

// $app->get('/frase/:me', function($nome){
// echo "Olá,meu nome é ". $nome;
// });

$app->run();

 ?>