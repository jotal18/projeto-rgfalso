<?php 

require_once('vendor/autoload.php');

use APP\Page;
use \Slim\Slim;
use APP\Rg;
use APP\Validacao;

$app = new Slim();

$app->config('debug', true);

// Mostra a página inicial
$app->get('/', function() {
    
	$dados = new Page();
	$dados->setTpl('index.html');

});

// Mostra a página de cadastrar
$app->get('/cadastrar', function() {
    
	$dados = new Page();
	$dados->setTpl('cadastrar_rg.html');

});

// Mostra a página de cadastro
$app->post('/cadastrar', function() {

	$dados = new Validacao();
	$dados->setData($_POST);
	

try{
	$dados->validaNome($dados->getnome());
} catch(Nome $e){
	echo $e->getMessage();

}catch(Mae $e) {
	echo $e->getMessage();
}
	



	// $dados->upload();

	// $dados->save();	
	// header('Location: /');
	// exit;

});

// Mostra a página de listagem
$app->get('/lista', function() {
    
	$dados = new Page();
	$dados->setTpl('listar_rg.html');

});

// Mostra a página de editar
$app->get('/editar/:idrg', function($idrg) {
    
	$dados = new Rg();
	$dados->getId($idrg);
	$pag = new Page();
	$pag->setTpl('editar_rg.html', array("dados"=>$dados->getValues()));

});

// Mostra a página de editar
$app->post('/editar/:idrg', function($idrg) {
    
	$dados = new Rg();
	$dados->getId((int)$idrg);
	$dados->setData($_POST);
	$dados->update();

	$msg = "Dados alterados com sucesso!";

	$pag = new Page();
	$pag->setTpl('index.html', array("dados"=>$msg));

});

// Mostra a página de pesquisar
$app->get('/pesquisa', function() {
    
	$dados = new Page();
	$dados->setTpl('pesquisar_rg.html');

});

// Mostra a página de pesquisar
$app->post('/pesquisa', function() {
	
	try {

		$dados = new Rg();
		$dados->setData($_POST);
		$dados->pesquisa();

		$msg = "";

		$pag = new Page();
		$pag->setTpl('listar_rg.html', array("dados"=>$dados->pesquisa(), "error"=>$msg));

	} catch (Exception $e){

		$msg = $e->getMessage();

		$pag = new Page();
		$pag->setTpl('listar_rg.html', array("error"=>$e->getMessage()));

	}	
	
});

$app->run();
 
 ?>

