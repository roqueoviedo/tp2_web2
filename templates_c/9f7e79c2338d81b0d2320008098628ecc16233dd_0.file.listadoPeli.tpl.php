<?php
/* Smarty version 4.3.4, created on 2023-11-10 01:43:39
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\listadoPeli.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654d7cbb5b5e62_37487617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7e79c2338d81b0d2320008098628ecc16233dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\listadoPeli.tpl',
      1 => 1699577013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_654d7cbb5b5e62_37487617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav>

<h1 id= "encabezado">Listado de peliculas</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?> 
       
    <li><a href="http://localhost/ProyectosWeb2/Practico/pelicula/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value->titulo;?>
</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>      
</nav>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
