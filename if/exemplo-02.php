<?php
 //teste comcluido e funcionando perfeitamente 
$Venda = 50000 ;

$Bonos1 = 10000 ;
$Bonos2 = 20000 ;
$Bonos3 = 30000 ;
$bonos4 = 50000 ;


if ($Venda < $Bonos1) {
    
    echo "Parabéns , tente Na Proxima vez.";
}

else if ($Venda < $Bonos2 ) {

    echo "Parabéns , Você Ganho Bonos de Mais 20% no Salario.";

}else if ($Venda < $Bonos3) {

    echo "Parabéns , Você Ganhou Bonus de mais 40% no Salario";
    
}else if ($Venda < $bonos4) {

   echo "Parabéns , Você Ganhou Bonus de Mais 60% no Salario";

}else {
    echo "Parabéns Voce Ganhou Bonus de Mais 60% no Salario + Viagem de 2 dias all incluse no Estado";

}

?>
