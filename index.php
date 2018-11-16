<?php 

require_once('vendor/autoload.php');

use APP\Page;
use \Slim\Slim;
use APP\Rg;

$app = new Slim();

$app->config('debug', true);


$app->get('/', function() {
    
$teste = new Page();

$teste->setTpl('index.html');

});

$app->get('/lista', function() {
    
$teste = new Page();

$teste->setTpl('listar_rg.html');

});


$app->get('/pesquisa', function() {
    
$teste = new Page();

$teste->setTpl('pesquisar_rg.html');

});

$app->post('/pesquisa', function() {
    
	$dados = new Rg();
	$dados->setData($_POST);
	// echo $dados->getnome();
	// echo $dados->getnome_mae();
	// echo $dados->getdt_nascimento();
	
	$dados->pesquisa();

	echo '<pre>';
	print_r($dados);
	echo '</pre>';

	$page = new Page();
	$page->setTpl('listar_rg.html', array('dados'=>$dados->getValues(), 'teste'=>2));
	
});

$app->run();
 
 ?>

