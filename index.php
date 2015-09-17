<?php 
include('header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(0);
$template->display('home.tpl');
?>