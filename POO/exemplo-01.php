<?php

class Pessoa{//Primeira letra tem que ser maiuscula , se o nome for composta Colocar letra maiuscula tbm  

    public $nome;//atributo

    public function falar(){//metodo

        return "o meu nome é " .$this->nome;

    }
}

$glaucio = new Pessoa(); 
$glaucio->nome= "Glacio Daniel";
echo $glaucio->falar();

?>