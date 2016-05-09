<?php

require_once 'config/index.php';


if(isset($_REQUEST['submit'])){
    $authAdapter = new Livraria_Auth_Adapter_Db(Livraria_Db_Connection::factory($config));
    $authAdapter->setUser($_REQUEST['data']['email']);
    $authAdapter->setPassword($_REQUEST['data']['password']);
    $authAdapter->setDb_user('email');
    $authAdapter->setDb_password('senha');
    $authAdapter->setTable('users');
    
    if($authAdapter->autenticate()){
        $auth =  Livraria_Auth::getInstance();
        $auth->write($authAdapter);
        header("location: admin_categorias.php");
    }else{
        $smarty->assign('error','Usuario ou senha invalidos');
        $smarty->assign('data',$_REQUEST['data']);
    }
}

$smarty->assign('content','admin/auth.phtml');
$smarty->display('admin/layout.phtml');