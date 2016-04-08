<?php

require_once 'config/index.php';

//if(!isset($_REQUEST['delete']))
  //  $_REQUEST['delete'] = -1;

//lista
$categorias = new Livraria_Categoria();
$smarty->assign('categorias', $categorias->fetchAll());

$smarty->assign('content','admin/categorias.phtml');
$smarty->display('admin/layout.phtml');

