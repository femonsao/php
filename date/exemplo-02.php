<?php

//$ts = strtotime("2001-09-11");
$ts = strtotime("l, +1 week");

echo date("l ,d/m/Y" , $ts );

?>