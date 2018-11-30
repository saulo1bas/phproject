<?php
//Escopo de variáveis
 $nome = "João";

 function teste(){
   global $nome; // super variável 
 	echo $nome;
 }

teste();
?>