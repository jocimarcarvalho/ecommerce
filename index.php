<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Hcode\DB\Sql();
	
	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

// $app->get('/frase/:me', function($nome){
// echo "Olá,meu nome é ". $nome;
// });

$app->run();

 ?>