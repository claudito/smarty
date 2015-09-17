<?php 
include('../header.php');
$Nombres="Luis Claudio";
$Apellidos="Claudio Ponce";
$id=$_POST['nombre'];
$template = new Smarty(1);

/*Primera  forma de asiganar  una variable externa*/
/*$template->assign('Name', $Nombres);
  $template->assign('Fullname', $Apellidos);
  $template->assign('id', $id);*/

  /*Segunda  forma  incluyendo las variables dentro de un array*/
$template->assign(array('Name'=>$Nombres,'Fullname'=>$Apellidos,
	'id'=>$id));

$template->display('mensaje-creacion.tpl');

?>