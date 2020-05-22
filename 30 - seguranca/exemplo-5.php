<h1>XSS</h1>
<form method="POST">
	<input type="text" name="busca">
	<button>Enviar</button>
</form>
<?php 
	if(isset($_POST["busca"])){
		echo strip_tags($_POST["busca"]). "<br>";
		echo htmlentities($_POST["busca"]);
	}
?>