
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<?php require 'asses/header.php' ?>

	<h1>Loguearse</h1>
	<span> o <a href="registro.php">Registrarse</a></span>

	<form action="validar.php" method="post">
		<input type="text" name="email" placeholder="Ingrese su email">
		<input type="password" name="password" placeholder="Ingrese su contraseña">
		<input type="submit" value="Enviar">
	</form>
	

</body>
</html>