<?php
/* Smarty version 3.1.33, created on 2018-11-17 00:14:32
  from 'C:\xampp\htdocs\projetos\rgfalso\smarty\templates\pesquisar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef4f58059c38_61568696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '412db7de07ccb32e47eb07e13d1f667892007168' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\rgfalso\\smarty\\templates\\pesquisar_rg.html',
      1 => 1542410052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bef4f58059c38_61568696 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RG Falso - Pesquisar</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-success">
      <a class="navbar-brand text-white font-weight-bold" href="index.html">Sistema de Controle de RG</a>   
    </nav>

    <div class="container-fluid mt-2">

      <div class="text-center mb-5">
        <h1></h1>
      </div>

      <div class="row text-center">
        
        <div class="col-md-3">
            <div class="card border-success bg-success">
              <div class="card-header text-white">
                Menu
              </div>
                <ul class="list-group">
                  <a href="cadastrar_rg.html" class="list-group-item list-group-item-action">Cadastrar RG</a>
                  <a href="editar_rg.html" class="list-group-item list-group-item-action">Editar RG</a>
                  <a href="pesquisar_rg.html" class="list-group-item list-group-item-action">Pesquisar RG</a>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
          <form method="post" action="/pesquisa">
            <div class="accordion" id="pesquisa">

              <div class="card border-success">
                <div class="card-header bg-success p-1" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-block btn-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Pesquisa por Nome/Nome da Mãe/Data de Nascimento
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#pesquisa">
                  <div class="card-body text-left">
                    <form>
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="digite o nome completo">
                      </div>
                      <div class="form-group">
                        <label for="nome_mae">Nome da Mãe</label>
                        <input class="form-control" type="text" name="nome_mae" id="nome_mae" placeholder="digite o nome completo da mãe">
                      </div>
                      <div class="form-group">
                        <label for="dt_nascimento">Data de Nascimento</label>
                        <input class="form-control" type="text" name="dt_nascimento" id="dt_nascimento" placeholder="dd/mm/aaaa" maxlength="10">
                      </div>
                  </div>
                </div>
              </div>

              <div class="card border-success">
                <div class="card-header bg-success p-1" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-block btn-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Pesquisa por Número do RG Falso
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#pesquisa">
                  <div class="card-body text-left">
                      <div class="form-group">
                        <label for="num_rg">Número do RG Falso</label>
                        <input class="form-control" type="number" name="num_rg" id="num_rg" placeholder="digite o número do rg falso">
                      </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col">
                  <button class="btn btn-secondary btn-block" type="reset">Cancelar</button>
                </div>
                <div class="col">
                  <button class="btn btn-primary btn-block" type="submit">Pesquisar</button>
                </div>
              </div>

            </div>  
          </form>     
        </div>
      </div>
      
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="application/javascript">
      $('input[type="file"]').change(function(e){
          var fileName = e.target.files[0].name;
          $('.custom-file-label').html(fileName);
      });
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
