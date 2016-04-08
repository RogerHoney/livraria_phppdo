<?php

require_once 'config/index.php';

//$db = Livraria_Db_Connection::factory($config);
//print_r($db);


 /*$categorias = new Livraria_Categoria();
 $categorias->getId(1);
 print_r($categorias->fetchAll());*/

 $categorias = new Livraria_Categoria();
 //$categorias->setNome("Joao");
 //$categorias->save();
 

 
 print_r($categorias->fetchAll());

$smarty->assign('content','admin/categorias.phtml');
$smarty->display('admin/layout.phtml');

