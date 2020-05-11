<h1>Operadores lógicos</h1>
<?php 
	$a = 55.0;
	$b = 55;
	echo "<h2>". $a .".0 e ". $b ."</h2>";
	echo $a .".0 maior que ". $b;
	var_dump( $a > $b);
	echo $a .".0 menor que ". $b;
	var_dump( $a < $b);
	echo $a .".0 igual que ". $b;
	var_dump($a == $b);
	echo $a .".0 identico que ". $b;
	var_dump($a === $b);
	echo $a .".0 diferente que ". $b;
	var_dump($a != $b);
	echo $a .".0 estritamente diferente que ". $b;
	var_dump($a !== $b);
?>
