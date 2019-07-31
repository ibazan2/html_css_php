<?php 

$anoNascimento = 1984;
$nomeCompleto = "";

$nome = "Italo";
$sobrenome = "Bazan";

$nomeCompleto = $nome . " " . $sobrenome ;

echo $nomeCompleto . "<br>";
/*$a = "";
$b = "";
$c = "";
$d = "";
*/
///////////////////////////////////////////////////////
$familia = array($a=null,$b=null,$c=null,$d=null);

$a = get_current_user();
$familia[0] = $a;
$familia[1] = gethostname();
$familia[2] = 10+50*5;
echo $familia[0] . " " . $familia[1] . "<br>";
echo sizeof($familia) . "<br>";
for ($i=0; $i <sizeof($familia); $i++) { 
	echo $familia[$i] . "<br>";
}







 ?>