<h1>Ordem de precedência com ( ) e operador && e ||</h1>
<?php
	echo 'conta 10 + 3 / 2<br>'; 
	$resultado = 10 + 3 / 2;
	echo 'resultado: '. $resultado. '<br>';
	echo 'conta (10 + 3) / 2<br>';
	$resultado = (10 + 3) / 2;
	echo 'resultado: '. $resultado. '<br>';
	$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 5;
	echo 'conta (10 + 3) / 2 > 5 && 10 + 5 < 5<br>';
	var_dump($resultado); 
	$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 5;
	echo 'conta (10 + 3) / 2 > 5 || 10 + 5 < 5<br>';
	var_dump($resultado); 
?>