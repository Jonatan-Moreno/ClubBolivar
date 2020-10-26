<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 18:38:12
  from 'C:\xampp\htdocs\web2\club_bolivar\templates\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f970984c59582_02500410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f52498924a6073eb92263e87e99edae76fe080c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\club_bolivar\\templates\\rooms.tpl',
      1 => 1603733890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f970984c59582_02500410 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="css/style.css">
<ul>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?> 
            <li
                
                <?php if ($_smarty_tpl->tpl_vars['room']->value->ocupada == 1) {?>
                    ><?php echo $_smarty_tpl->tpl_vars['room']->value->nro_habitacion;?>
ocupada
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['room']->value->ocupada == 0) {?>
                    class = verde><?php echo $_smarty_tpl->tpl_vars['room']->value->nro_habitacion;?>
 libre
                <?php }?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</ul>

<?php }
}
