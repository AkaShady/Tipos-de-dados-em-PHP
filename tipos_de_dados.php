<?php

//Tipos básicos:

$nome ="Shady";//String
$site = 'https://github.com/AkaShady';//String

$ano = 1999;//Integer
$salario =  10000.99;//Float
$bloqueado = false;//Boolean

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Tipos composto:

$idiomas = array ("ingles", "frances", "russo");//Arry
//echo $idiomas[2];

$nascimento = new DateTime();//Object
//var_dump($nascimento);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Tipos especiais:

$arquivo = fopen("tipos_de_dados.php", "r");//Resource
//var_dump($arquivo);

$nulo  = NULL;//NULL

?>