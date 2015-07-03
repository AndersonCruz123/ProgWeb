<!DOCTYPE html>
<html>
<head>
	<title>Processa</title>
</head>
<body>
<?php

	$nome = $_GET['seunome'];
	$sexo = $_GET['sexo'];
	$comentarios = $_GET['comentarios'];

	echo "<h1>$nome</h1>";
	if ($sexo=='1') echo "<h2>masculino</h2>";
	else echo "<h2>feminino</h2>";
	echo "<h3>$comentarios</h3>";
?>
</body>
</html>