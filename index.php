<?php 
ee
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

$teste->setTpl('lista_rg.html');

});


$app->get('/pesquisa', function() {
    
$teste = new Page();

$teste->setTpl('pesquisar_rg');

});


$app->post('/pesquisa', function() {
    
	$info = Rg::listAll();
	print_r($info);
	$teste = new Page();
	$teste->setData($_POST);
	$teste->setTpl('lista_rg', array(
		'teste'=>$info
	));

});

$app->run();
 
 ?>
