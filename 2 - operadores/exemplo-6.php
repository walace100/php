<h1>operador null coalesce: ??</h1>
<?php 
	$a = null;
	$b = null;
	$c = 10;
	echo '<h2> null, null e '. $c .'</h2>';
	echo $a ?? $b ?? $c;
?>