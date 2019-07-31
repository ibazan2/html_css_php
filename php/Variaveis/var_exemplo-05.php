<?php


$nome = "italo123";

function teste(){

	$nome = "No teste 1";
	echo $nome . "<br>";
}

function teste2(){

	global $nome;
	echo $nome . "<br>";
}

teste($nome);
teste2($nome);


?>
