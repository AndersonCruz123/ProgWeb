<!DOCTYPE html>
<html>
<head>
	<title>Processa</title>
</head>
	
<style type="text/css">
	
	#pagelogin{

		position: relative;
		top: 150px;
		left: 450px;
	}

	h1{
		position: relative;
		left: -40px;
		top: -50px;
	}
	#login{
		position: relative;
		top:-40px;
		left: 60px;
	}

	#senha {

		position: relative;
		top:-40px;
		left: 60px;
	}

	#send{
		position: relative;
		left: -60px;
		top: 40px;
	}

</style>
<body>
<?php

	$login = $_GET['login'];
	$senha = $_GET['senha'];



	if ($login=='demo' && $senha=='demo') {
		session_start();
		$_SESSION['start'] = date('H:i');
		header('Location: Trabalho3.php');
	}
	else echo "<div id='pagelogin'><h1>Login ou Senha não confere</h1><form id='formulario' method='GET' action='processa1.php'>
	<h4>Login:</h4>
	<input id='login' name='login' type='text'>
	<h4>Senha:</h4>
	<input id= 'senha' name='senha' type='senha'>
	<input type='submit' name='submit' id='send' value='Enviar'>
</form>
</div>";

?>
</body>
</html>
