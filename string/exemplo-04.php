<?php

$frase = "A repetição é a mãe da retenção";

$p = strpos($frase, "mãe");

$texto = substr($frase,$p,strlen($frase));

var_dump($texto);
?>