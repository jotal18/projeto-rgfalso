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

	// echo '<pre>';
	// print_r($dados);
	// echo '</pre>';
	

	$array_autores = array(
		"Juliano Niederauer",
		"Alexamdre Coutinho",
		"Lino Sarlo da Silva",
		"Felipe"
	);

	require_once('vendor/smarty/smarty/libs/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->template_dir = $_SERVER['DOCUMENT_ROOT'] . '/smarty/templates/';
        $smarty->compile_dir  = $_SERVER['DOCUMENT_ROOT'] . '/smarty/templates_c/';
        $smarty->config_dir   = $_SERVER['DOCUMENT_ROOT'] . '/smarty/configs/';
        $smarty->cache_dir    = $_SERVER['DOCUMENT_ROOT'] . '/smarty/cache/';
	$smarty->assign("autores", $array_autores);
	$smarty->display("listar_rg.html");
	
});

$app->run();
 
 ?>

