<h1>Permissão de pasta</h1>
<?php
/*
	0 - nada
	1 - execução
	2 - gravação
	3 - execução e gravação
	4 - leitura
	5 - leitura e execução
	6 - leitura e gravação
	7 - leitura, gravação, execução
*/
$pasta = "arquivos";
$permissao = "0775";
if(is_dir($pasta))
	mkdir($pasta, $permissao);
echo "Diretório criado com sucesso!";