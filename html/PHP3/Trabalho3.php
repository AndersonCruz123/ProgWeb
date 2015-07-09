<!DOCTYPE html>
<html>
	<head>
		<meta charset = UTF-8>
		<title> Minha primeira página</title>
	</head>

<style type="text/css">
	
	#pagelogin{

		position: relative;
		top: 150px;
		left: 450px;
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
		session_start();
		if (!isset($_SESSION['start'])) {
			echo "<div id='pagelogin'><form id='formulario' method='GET' action='processa1.php'>
	<h4>Login:</h4>
	<input id='login' name='login' type='text'>
	<h4>Senha:</h4>
	<input id= 'senha' name='senha' type='senha'>
	<input type='submit' name='submit' id='send' value='Enviar'>
</form>
</div>";	

//			$_SESSION['start'] = date('H:i');

		} else {
		echo "<h1>Este é um grande cabeçalho</h1>
		<h3>E este aqui é um pequeno cabeçalho</h3>
		<p>Aqui eu coloquei um parágrafo com algum texto aleatório, e a seguir vou inserir
			um formulário dentro de uma tabela. Além disso, aqui vai um link: <a href='http://icomp.ufam.edu.br/david'>http://icomp.ufam.edu.br/david</a></p>
			<form id='formulario' method='GET' action='processa.php'>	
		<table border = '0'>
			<thead>
				<tr>
					<td>Seu Nome</td>
					<td><input name='seunome' type='text'></td>
				</tr>

				<tr>
					<td>Seu sexo</td>
					<td>
						<select name='sexo' id='sexo'>
							<option value='1'>Masculino</option>
							<option value='2'>Femino</option>
						</select>
					</td>
				</tr>

				<tr>
					<td style='vertical-align:top'>Seus </br>comentários</td>
					<td><textarea name = 'comentarios' rows='9' cols ='50'></textarea></td>
				</tr>

				<tr>
					<td></td>
					<td><input type='submit' name='submit' id='enviar' value='Enviar'></td>
				</tr>
			</thead>
		</table>
	</form>";
	}
	
	function processa() {

	$login = $_GET['login'];
	$senha = $_GET['senha'];



	if ($login=='demo' && $senha=='demo') $_SESSION['start'] = date('H:i');
	else echo "<h2>not demo</h2>";

	}

	?>

	</body>

</html>

