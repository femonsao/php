<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");

$login = "Carlos";
$password = "951357";
$id = 5;

$stmt->bindParam (":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID" , $id);
$stmt->execute();

echo "Dados alterados  OK!";

?>