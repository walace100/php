<h1>Variáveis pré-definidas</h1>
<?php
	$nome = (string) $_GET['a'];
	$url = __DIR__;
	echo $url . "<br>";
	$ip = $_SERVER['REMOTE_ADDR'];
	echo $ip. "<br>";
	$script = $_SERVER['SCRIPT_NAME'];
	echo $script. "<br>";
	var_dump($nome);
?>