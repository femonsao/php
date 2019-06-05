<?php

header("Content-Type: image/jpeg");


$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0 , 0, 0);

$gray = imagecolorallocate($image, 100,100,100);


imagettftext($image,32,0, 250, 300, $titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf" , "CERTIFICADO");

imagettftext($image,32,0, 350, 375, $titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");

imagestring($image,3, 420, 400, utf8_decode("Concluído em:".date("d/m/Y")), $titleColor);


imagejpeg($image);

imagedestroy($image);

?>