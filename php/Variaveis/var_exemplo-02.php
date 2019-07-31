<?php

$anoNascimento = 1984;

$nomeCompleto = "Italo Bazan1";

echo $nomeCompleto," nasceu em " , $anoNascimento;
echo "<br>";

if (isset($nomeCompleto)){
	echo "entrei";
	//echo "<br>";
	echo "<p>";
}
unset($nomeCompleto);
if (isset($nomeCompleto)){
	echo "entrei";
}else{
	//echo "<br>";
	echo "Não existe Mais";
	echo "<p> <font size='2000' color='blue'> ok </FONT>";
	echo "Não existe Mais";
	echo "<br>";
	echo "Não existe Mais";

}


?>