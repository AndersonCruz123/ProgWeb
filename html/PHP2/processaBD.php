<!DOCTYPE html>
<html>
<head>
	<title>Processa</title>
</head>
<body>
<?php

	$conexao = @mysql_connect("localhost", "progweb", "123456");
   	if (!$conexao) die ("<p>Nao eh possivel se conectar ao banco.</p>"
							. "<p>Codigo de Erro " . mysqli_connect_errno()
							. ": " . mysqli_connect_error()) . "</p>";

	$banco = mysql_select_db("ProgWeb",$conexao);




		if (!$banco) die("<p>Banco de Dados não disponível.</p>");
		echo "<p>Banco de dados aberto com sucesso.</p>";

	$nome = $_GET['seunome'];
	$sexo = $_GET['sexo'];
	$comentarios = $_GET['comentarios'];

	$sql = "INSERT INTO formulario (nome, sexo, comentario) VALUES('$nome', '$sexo', '$comentarios')";
	mysql_query ($sql, $conexao);
	print mysql_error($conexao);
	mysql_close($conexao);

	echo "<h1>$nome</h1>";
	if ($sexo=='1') echo "<h2>masculino</h2>";
	else echo "<h2>feminino</h2>";
	echo "<h3>$comentarios</h3>";
?>
</body>
</html>