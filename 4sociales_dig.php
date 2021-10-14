<!DOCTYPE html>
<html>
<head>
	<title>sociales</title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
		<?php require 'asses/header.php' ?>

		<h1>SOCIALES.</h1>

		<h2>Digite las calificaciones de sus estudiantes.</h2>

		<a href="añadir_notas.php">Digitar notas en otras materias.</a>

		<form action="4sociales_post.php" method="post">
		<input type="text" name="idestudiante" placeholder="Ingrese la identificacion del estudiante">
		<input type="text" name="calificacion" placeholder="Ingrese la calificacion del estudiante">
		<input type="text" name="nombre" placeholder="Ingrese el nombre del estudiante">
		Seleccione la materia:
		<br><br>
		<select name="idgrupo">
			<option value="1">Matematicas.</option>
			<option value="2">Sociales.</option>
			<option value="3">Castellano.</option>
		</select><br>
		<input type="submit" value="Enviar">


</body>