<?php
	//variaveis simples

	$nome = "Walace";
	echo $nome;
	echo '<br>';
	$site = 'www.walacepaz.x-br.com';
	echo $site;
	echo '<br>';
	$ano = 2002;
	echo $ano;
	echo '<br>';
	$salario = 840.99;
	echo $salario;
	echo '<br>';
	$bloqueado = false;
	echo $bloqueado;
	echo '<br>';

	//variaveis compostas
	$frutas = array('abacaxi', 'laranja', 'manga');
	echo $frutas[2];
	echo '<br>';

	//objetos
	$nascimento = new DateTime();
	var_dump($nascimento);
	echo '<br>';

	//arquivo
	$arquivo = fopen('exemplo-3.php', 'r');
	var_dump($arquivo);
	echo '<br>';

	//null
	$nulo = null;
	var_dump($nulo);
?>