<?php

$name = "images";

if (!is_dir($name)){

    mkdir($name); //mkdir cria o diretorio
    echo "Diretório $name criado com sucesso!";
    
} else{

    rmdir($name); //rmdir usado para remover diretorio

    echo "Já existe o diretorio: $name foi removido ";
}
?>