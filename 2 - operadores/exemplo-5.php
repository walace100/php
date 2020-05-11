<h1>Comparação tripla com <=>: spaceship</h1>
<?php
	$a = 50; 
	$b = 35;
	echo '<h2>'. $a .' e '. $b .'</h2>';
	var_dump($a <=> $b);
	echo $a .' maior que '. $b . ' retorna: '. true . '<br>';
	echo $a .' menor que '. $b . ' retorna: '. -1 . '<br>';
	echo $a .' igual que '. $b . ' retorna: '. 0 . '<br>';

?>