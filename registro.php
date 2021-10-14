
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrarse</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
		<?php require 'asses/header.php' ?>

		<h1>Registrarse</h1>
		<span> o <a href="Login.php">Loguearse</a></span>
		<form action="Login.php" method="post"></form>

		<form action="db.php" method="post">
		<input type="text" name="nombre" placeholder="Ingrese su nombre completo">
		<input type="text" name="email" placeholder="Ingrese su correo electronico">
		<input type="text" name="telefono" placeholder="Ingrese su numero de telefono">
		<input type="text" name="identificacion" placeholder="Ingrese su numero de identificacion">
		<input type="text" name="edad" placeholder="Ingrese su edad">
		<input type="password" name="password" placeholder="Crea tu contraseña">
		Seleccione la materia:
		<br><br>
		<select name="idgrupo">
			<option value="1">Matematicas.</option>
			<option value="2">Sociales.</option>
			<option value="3">Castellano.</option>
		</select><br>
		<input type="submit" value="Enviar">
</body>
</html>