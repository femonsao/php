<?php

session_id('t0omh29mfkierafl5fc6tvs1');

require_once("config.php");

session_regenerate_id();


echo session_id();


var_dump($_SESSION);


?>