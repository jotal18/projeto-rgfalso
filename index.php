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

// Lista os resultados 
$app->get('/lista', function() {
    
$teste = new Page();

$teste->setTpl('listar_rg.html');

});


// Mostra o formulário de pesquisa
$app->get('/pesquisa', function() {
    
$teste = new Page();

$teste->setTpl('pesquisar_rg.html');

});

// Executa a pesquisa e redireciona para listar_rg
$app->post('/pesquisa', function() {
    
	$dados = new Rg();
	$dados->setData($_POST);
	// echo $dados->setnome();
	// echo $dados->setnome_mae();
	// echo $dados->setdt_nascimento();
	// echo $dados->setrg();
	
	// $dados->getValues()
	// echo $dados->getnome();
	// echo $dados->getnome_mae();
	// echo $dados->getdt_nascimento();
	// echo $dados->getrg();

	// Original
	// $result = $dados->pesquisa();
	// echo '<pre>';
	// print_r($result);
	// echo '</pre>';
	// echo '</br>';

	$dados->pesquisa();
	

	echo '<pre>';
		print_r($dados->pesquisa());
		echo '</pre>';

	$page = new Page();
	$page->setTpl('listar_rg.html', array("dados"=>$dados->pesquisa()));
	
});

$app->run();
 
 ?>

