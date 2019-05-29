<?php
/*
$anoNascimento = 1998;

$nomeCompleto = "";*/
//Na linha a baixo temos um Variavel com numero no nome

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;  // contatenização e a jução com pontos  ára dar espaço ultilizamos " " aspas espaço aspas.

echo $nomeCompleto;

exit;


    echo $nome1;

    echo "<br/>";

    unset($nome1); //destruir variavel

if (isset($nome1)) {  // verificar se a variavel existe 

    echo $nome1;

}
   

?>