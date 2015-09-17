<?php /* Smarty version 3.1.24, created on 2015-09-16 19:02:40
         compiled from "../estilos/templates/mensaje-creacion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:686255f9f51007d4b1_09255400%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f62b782e2a6ae84f9bbba9afd84f3cc171546d' => 
    array (
      0 => '../estilos/templates/mensaje-creacion.tpl',
      1 => 1442442814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686255f9f51007d4b1_09255400',
  'variables' => 
  array (
    'id' => 0,
    'Name' => 0,
    'Fullname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55f9f510129286_27053452',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f9f510129286_27053452')) {
function content_55f9f510129286_27053452 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '686255f9f51007d4b1_09255400';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['Fullname']->value;?>
</h2>
</body>
</html><?php }
}
?>