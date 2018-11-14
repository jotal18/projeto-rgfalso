<?php 

require_once('vendor/autoload.php');

use APP\Page;

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);


$app->get('/', function() {
    
$teste = new Page();

$teste->setTpl('lista_rg.html');

});

$app->get('/admin', function() {
    
$teste = new Page();

$teste->setTpl('teste.tpl');

});

$app->run();
 
 ?>