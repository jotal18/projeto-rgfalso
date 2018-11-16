<?php
/* Smarty version 3.1.33, created on 2018-11-15 22:12:42
  from 'C:\xampp\htdocs\rgfalso\smarty\templates\listar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bee0b7a1fc8f0_21154565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '908620eaa218bb0e8686c696773f5f38505d7b33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rgfalso\\smarty\\templates\\listar_rg.html',
      1 => 1542327161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee0b7a1fc8f0_21154565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21324658255bee0b7a1a73d5_88278004';
?>
<!DOCTYPE html>
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
                  <?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['teste']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
                  <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['dados']->value['idrg'];?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dados']->value['num_rg'];?>
</td>
                    <td><a class="btn btn-primary" href="#">Ofício</a></td>
                    <td><a class="btn btn-warning" href="#">Detalhar</a></td>
                    <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i></i></a></td>
                  </tr>
                  <?php
}
}
?>                  
                </tbody>
              </table>

            </div>
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
