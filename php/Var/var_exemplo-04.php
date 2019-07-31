<?php 

$nome = $_GET["a"];


var_dump($nome);
echo "<br>";
echo $nome  . "<br>";

$nome = (int)$nome;
var_dump($nome);
echo "<br>";
echo $nome + 10 . "<br>";

/////////////////////////////

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip . "<br>";

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip . "<br>";
 ?>