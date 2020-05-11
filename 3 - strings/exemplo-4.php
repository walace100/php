<h1>strpos, substr e strlen</h1>
<?php 
	$frase = 'A repetição é a mãe da retenção.';
	echo $frase;
	echo "<br>palavra: mãe";
	$palavra = 'mãe';
	$q = strpos($frase, $palavra);
	echo "<br>strpos é para encontrar uma palavra na string";
	$texto = substr($frase, 0, $q);
	echo "<br>substr é para falar o que tem até uma determinada frase";
	echo "<br>strlen é para saber o tamanho da frase";
	var_dump($texto);
	var_dump($q);
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));	
	var_dump($q + strlen($palavra));
	var_dump(strlen($frase));
	var_dump($texto2);

?>