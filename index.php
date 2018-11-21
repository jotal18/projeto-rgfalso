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

	try{

		$dados = new Rg();
		$dados->setData($_POST);

		$nome = trim(strip_tags($dados->getnome()));
		$nome_mae = trim(strip_tags($dados->getnome_mae()));

		$dt_inicial = $dados->getdt_nascimento();
		$dt_explode = explode('/', $dt_inicial);
		$dt_nascimento = $dt_explode[2] . '-' .  $dt_explode[1] . '-' . $dt_explode[0];

		$num_rg = trim(strip_tags($dados->getnum_rg()));

		$dados->upload();

		$dados->save($nome, $nome_mae, $dt_nascimento, $num_rg);	

		$msg = "Dados cadastrados com sucesso!";

		$pag = new Page();
		$pag->setTpl('cadastrar_rg.html', array("dados"=>$msg));

	}catch (Exception $e) {

		$error = $e->getMessage();

		$pag = new Page();
		$pag->setTpl('cadastrar_rg.html', array(
			"error"=>$error, 
			"nome"=>$nome, 
			"nome_mae"=>$nome_mae, 
			"dt_inicial"=>$dt_inicial,
			"num_rg"=>$num_rg
		));
	}

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
    
try{

	$dados = new Rg();
	$dados->getId((int)$idrg);
	$dados->setData($_POST);
	$dados->upload();
	$dados->update();


	$msg = "Dados alterados com sucesso!";

	$pag = new Page();
	$pag->setTpl('index.html', array("dados"=>$msg));

}catch (Exception $e){

	$error = $e->getMessage();

	$pag = new Page();
	$pag->setTpl('editar_rg.html', array("error"=>$error));

}

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

