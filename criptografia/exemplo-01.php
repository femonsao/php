<?php

$data =[
    "nome"=>"Hcode"
];

define('SECRET', pack('a16','senha'));

$mcrypt = mcrypt_encrypt( //mcrypt_encode ultrapassado apenas para php 7.1.0
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB

);

$final = base64_encode($mcrypt);

var_dump($mcrypt);

$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    base64_decode($final),
    MCRYPT_MODE_ECB

);

var_dump(json_decode($string, true));



?>