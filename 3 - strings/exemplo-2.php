<h1>Funções internas de string: strtoupper, strtolower, ucfirst, ucwords</h1>
<?php
	$nome = 'Walace Paz';
	echo $nome;
	echo "<br>strtoupper: ";
	echo strtoupper($nome);
	echo "<br>strtolower: ";
	echo strtolower($nome);
	echo '<br>ucfirst: ';
	$nome = 'walace paz';
	echo ucfirst($nome);
	echo "<br>ucwords: ";
	echo ucwords($nome);
?>