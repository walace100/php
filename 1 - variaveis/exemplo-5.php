<h1>Escopo de Variável</h1>
<?php
	$nome = 'Walace<br>' ;
	function teste(){
		global $nome;
		//echo $nome;
		function teste3(){
			global $nome;
			echo $nome;
		}
		return teste3();
	}
	function teste2(){
		$nome = 'Paz';
		echo $nome. " agora no teste2";
	}
	//$teste4 = () =>{ echo 'a'};
	teste4();
	teste()->teste3();
	teste2();	
?>