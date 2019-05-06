<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Lexter\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page(); //Logo na criação do template, ele chama o construtor e joga o header na tela
	$page->setTpl("index"); //aqui ele joga o conteúdo do index


//O footer ele joga quando terminar de executar a classe, pois ele está dentro do destruct
});

// $app->get('/frase/:me', function($nome){
// echo "Olá,meu nome é ". $nome;
// });

$app->run();

 ?>