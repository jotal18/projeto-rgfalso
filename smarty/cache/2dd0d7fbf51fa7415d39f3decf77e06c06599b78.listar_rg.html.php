<?php
/* Smarty version 3.1.33, created on 2018-11-16 23:54:30
  from 'C:\xampp\htdocs\projetos\rgfalso\smarty\templates\listar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef4aa64dd002_78771427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8840afc81b769ac4174ae66b59e0e58467952a90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\rgfalso\\smarty\\templates\\listar_rg.html',
      1 => 1542408857,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5bef4aa64dd002_78771427 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>RG Falso - Listagem de RG</title>
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
            <div class="card border-success">
              <div class="card-header text-white bg-success">
                <h5>Listagem de RG</h5>
              </div>

              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Ofício</th>
                    <th scope="col">Detalhar</th>
                    <th scope="col">Excluir</th>
                  </tr>
                </thead>
                
                <tbody>
                                    <tr>
                    <th scope="row">2</th>
                    <td>Francisco</td>
                    <td>456456132</td>
                    <td><a class="btn btn-primary" href="#">Oficio</a></td>
                    <td><a class="btn btn-warning" href="#">Detalhar</a></td>
                    <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i></i></a></td>
                  </tr>
                                      <tr>
                    <th scope="row">5</th>
                    <td>francisco</td>
                    <td>0</td>
                    <td><a class="btn btn-primary" href="#">Oficio</a></td>
                    <td><a class="btn btn-warning" href="#">Detalhar</a></td>
                    <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i></i></a></td>
                  </tr>
                              
                </tbody>
              </table>

            </div>
        </div>
      </div>
      
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="application/javascript">
      $('input[type="file"]').change(function(e){
          var fileName = e.target.files[0].name;
          $('.custom-file-label').html(fileName);
      });
    </script>
  </body>
</html><?php }
}
