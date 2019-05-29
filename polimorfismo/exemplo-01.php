<?php

class Animal{

    public function falar(){

        return"Som";
    }
    public function mover(){

        return "Anda";

    }
}


class Cachorro extends Animal{

    public function falar()
    {
        
        return "Late";
    }
}
class gato extends Animal{

    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar()
    {
        return "Pia";
    }
    public function mover()
    {
        return "Voa e " . parent ::mover();
    }
}

$pluto = new Cachorro ();

echo "O Pluto: <br/>";
echo"<br/>";
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";


echo "-----------------------------------<br/>";


$garfield = new gato ();

echo "O Garfield: <br/>";
echo"<br/>";
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-----------------------------------<br/>";

$piuPiu= new Passaro ();

echo "O Piu-Piu: <br/>";
echo"<br/>";
echo $piuPiu->falar() . "<br/>";
echo $piuPiu->mover() . "<br/>";


?>