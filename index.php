<?php 

require_once('vendor/autoload.php');


use APP\Page;
use \Slim\Slim;
use APP\Rg;

$app = new Slim();

$app->config('debug', true);

// Mostra a página inicial
$app->get('/', function() {
    
	$teste = new Page();

	$teste->setTpl('index.html');

});

// Mostra a página de cadastrar
$app->get('/cadastrar', function() {
    
	$teste = new Page();

	$teste->setTpl('cadastrar_rg.html');

});

// Mostra a página de editar
$app->get('/editar/:idrg', function($idrg) {
    
	$dados = new Rg();
	$dados->getId($idrg);
	echo '<pre>';
	print_r($dados->getValues());
	echo '</pre>';

	$teste = new Page();
	$teste->setTpl('editar_rg.html', array("dados"=>$dados->getValues()));

});

// Mostra a página de pesquisar
$app->get('/pesquisa', function() {
    
	$teste = new Page();

	$teste->setTpl('pesquisar_rg.html');

});

// Executa a pesquisa e redireciona para listar_rg
$app->post('/pesquisa', function() {
    
	$dados = new Rg();
	$dados->setData($_POST);
	
	try {

		$dados->pesquisa();
		// echo '<pre>';
		// print_r($dados->pesquisa());
		// echo '</pre>';
		$msg = "";
		$page = new Page();
		$page->setTpl('listar_rg.html', array("dados"=>$dados->pesquisa(), "error"=>$msg));

	} catch (Exception $e){

		$msg = $e->getMessage();
		$page = new Page();
		$page->setTpl('listar_rg.html', array("error"=>$e->getMessage()));

	}	
	
});

// Mostra a página de listagem
$app->get('/lista/:idrg', function($idrg) {
    
	$teste = new Page();

	$teste->setTpl('listar_rg.html');

});

$app->run();
 
 ?>

