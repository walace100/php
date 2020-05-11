<h1>Include, require e require_once</h1>
<?php
	//include 'exemplo-1.php'; tenta funcionar mesmo com problema 
	//require 'exemplo-1.php'; // erro fatal com problema
	require_once 'exemplo-1.php'; //pede so uma vez
	$resultado = somar(10, 20);
	echo $resultado;
?>