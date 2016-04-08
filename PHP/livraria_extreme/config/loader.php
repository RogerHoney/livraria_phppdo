<?php


function __autoload($class_name){
    $class_name = str_replace("_", "/", $class_name).".php";
    require_once $class_name;
}/*
function __autoload($Class){
    $dirName = 'classes';
    if(file_exists($dirName.'/'.$Class.'.php')):
        include_once $dirName.'/'.$Class.'.php';
        else :
            //echo 'Arquivo'.$Class.'.php  Não existe </br>';
        
        endif;
}*/

