<?php

 $nome = (int)$_GET["a"];
 
 //var_dump($nome);


 $ip = $_SERVER["REMOTE_ADDR"]; // pega ip
 $log = $_SERVER["SCRIPT_NAME"]; // pega pastas 
 
 echo $ip;
 echo $log;
?>