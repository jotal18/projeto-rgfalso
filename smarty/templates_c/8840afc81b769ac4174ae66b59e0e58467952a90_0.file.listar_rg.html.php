<?php
/* Smarty version 3.1.33, created on 2018-11-18 01:49:27
  from 'C:\xampp\htdocs\projetos\rgfalso\smarty\templates\listar_rg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf0b717444990_04822720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8840afc81b769ac4174ae66b59e0e58467952a90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\rgfalso\\smarty\\templates\\listar_rg.html',
      1 => 1542502153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0b717444990_04822720 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a class="navbar-brand text-white font-weight-bold" href="/">Sistema de Controle de RG</a>   
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
                  <a href="/cadastrar" class="list-group-item list-group-item-action">Cadastrar RG</a>
                  <a href="/editar" class="list-group-item list-group-item-action">Editar RG</a>
                  <a href="/pesquisa" class="list-group-item list-group-item-action">Pesquisar RG</a>
                </ul>
            </div>
        </div>

        <div class="col-md-9">

            <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
            <div>
              <h4 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
            </div>

            <?php } else { ?>
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
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idrg'];?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['num_rg'];?>
</td>
                    <td><a class="btn btn-primary" target="_blank" href="upload/<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['oficio'];?>
">Oficio</a></td>
                    <td><a class="btn btn-success" href="/editar/<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idrg'];?>
">Editar</a></td>
                    <td><a class="btn btn-warning" target="_blank" href="#">Detalhar</a></td>
                    <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i></i></a></td>
                  </tr>
                    <?php
}
}
?>          
                </tbody>
              </table>
            <?php }?>
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
