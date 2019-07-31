<?php 

///// Operadores do PHP 7

$a = 50;
$b = 35;

/*
Se a > b =>> 1
Se a = b =>> 0
Se a < b =>> -1 
*/
var_dump($a <=> $b); 
echo  "<br>";

/*
Se b > a =>> 1
Se b = a =>> 0
Se b < a =>> -1 
*/
var_dump($b <=> $a);

 ?>