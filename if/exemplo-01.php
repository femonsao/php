<?php

$qualASuaIdade = 125;

$idadadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {
    echo "Idoso";
}
    
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade" : "Maior de Idade";


?>