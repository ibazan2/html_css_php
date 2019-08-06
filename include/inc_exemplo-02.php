<?php 

//include "inc_exemplo-01.php"; //Tenta funcionar se o arquivo não existir ou estiver com falha.
require "inc_exemplo-01.php";	//Obriga que o arquivo exista e esteja funcionando corretamente. Senão, erro fatal


$resultado = somar(10,20);

echo $resultado;

 ?>