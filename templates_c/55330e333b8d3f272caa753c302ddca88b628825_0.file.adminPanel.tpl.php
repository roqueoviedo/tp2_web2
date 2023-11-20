<?php
/* Smarty version 4.3.4, created on 2023-11-17 05:03:39
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6556e61bdd1ad6_83080727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55330e333b8d3f272caa753c302ddca88b628825' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\adminPanel.tpl',
      1 => 1700193818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6556e61bdd1ad6_83080727 (Smarty_Internal_Template $_smarty_tpl) {
?><a>ESTE ES EL PANEL DE ADMINISTRADOR</a>

<div class="nuevaPelicula">
<h1>Nueva pelicula</h1>  
<form id="nuevaPelicula" action='nuevaPelicula' method="post">
    <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo de una pelicula" required>
    <input type="text" name="anio" id="anio" placeholder="Ingrese el año" required>
    <input type="text" name="director" id="director" placeholder="Ingrese el director" required>
    <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese la clasificacion" required>
    <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese la sinopsis" required>

    <select name="fk_genero" required>
    <option value="">Seleccionar un genero</option>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        
        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"> <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <input type="submit" value="Enviar">


    <div class="borrarPelicula">
    <h1>Borrar pelicula</h1>  
    <form id="nuevaPelicula" action='nuevaPelicula' method="post">
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo de una pelicula" required>
        <input type="text" name="anio" id="anio" placeholder="Ingrese el año" required>
        <input type="text" name="director" id="director" placeholder="Ingrese el director" required>
        <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese la clasificacion" required>
        <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese la sinopsis" required>
    
        <select name="fk_genero" required>
        <option value="">Seleccionar un genero</option>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
            
            <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"> <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    
        <input type="submit" value="borrar">
    


</form>
</div>
<?php }
}
