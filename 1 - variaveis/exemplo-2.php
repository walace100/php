<head>
	<style type="text/css">
		body{
			background: #000;
			color: #fff;
		}
	</style>
</head>
<?php
	// linha de baixo temos uma variável com número no nome
	/*
	$anoNascimento = 1980;
	$nomeCompleto = 'João';
	*/
	$nome1 = 'Walace';
	echo $nome1;
	echo '<br>';
	$sobrenome = 'Paz';
	$nomeCompleto = $nome1 . " " . $sobrenome;
	echo $nomeCompleto;
	exit; 
	unset($nome1);
	if(isset($nome1)){
		echo $nome1;
	}
?>