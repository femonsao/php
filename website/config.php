<?php


header('Content-Type: text/html; charset=utf-8');


date_default_timezone_set("America/Sao_Paulo");

spl_autoload_register(function($class_name){

    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

    if(file_exists(($filename))){
        require_once($filename);
    }

});


?>