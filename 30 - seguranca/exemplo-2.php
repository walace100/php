<h1>SQL injection</h1>
<?php
	$id = (isset($_GET["id"])) ? $_GET["id"]: 1;
	if(!is_numeric($id) || strlen($id) > 5){
		exit("Pegamos você");
	}
	$conn = mysqli_connect("localhost", "root", "", "dbphp7");
	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
	$exec = mysqli_query($conn, $sql);
	while ($resultado = mysqli_fetch_object($exec)) {
		echo $resultado->deslogin ."<br>";
	}
?>
<form>
	<input type="text" name="id">
	<button>Enviar</button>
</form>