<?PHP

class Endereco{

    private $logadouro;
    private $numero;
    private $cidade;
    
    public function __construct($a, $b, $c)
    {
        $this->logadouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        
    }

    public function __destruct()
    {
        var_dump("Destruir");
    }

    public function __toString()
    {
        return $this->logadouro.", ".$this->numero." - ".$this->cidade."</br>";
    }
}

$meuEndereco = new Endereco("Rua Guarino Vanucci", "55", "indaiatuba");


echo $meuEndereco;


//var_dump($meuEndereco);

//unset($meuEndereco);

?>