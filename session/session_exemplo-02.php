<?php 


require_once("session_config.php");
#session_start();
#session_unset($_SESSION["nome"]);

echo $_SESSION["nome"] . "<br>";
echo $_SESSION["idade"];

session_destroy();

 ?>