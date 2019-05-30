<?php

$filename = "usuarios.csv";
/*
if (!is_file($filename)){
    fopen($filename,"a+");

    echo "Arquivo criado com sucesso!"."</br>";

}else{

    echo "Arquivo já existe!!";
}*/

if (file_exists($filename)){

    $file = fopen($filename, "r");
    

    $headers = explode(",", fgets($file));

    $data = array();

    while ($row =fgets($file)) {
    

       $rowDAta = explode(",", $row);
       $linha = array();

        for ($i = 0; $i < count($headers); $i++){
           
            $linha[$headers[$i]] = $rowDAta[$i];


       }

       array_push($data, $linha);


    }

    fclose($file);

    
}

echo json_encode($data);


?>