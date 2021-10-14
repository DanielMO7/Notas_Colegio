<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DM Shops</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>


	<a href="maestros.php">Link para maestros.</a>

	<?php require 'index.php' ?>
	<h1>Informacion general de todos los estudiantes:</h1>
	<br>
	<a href="1matematicas.php">Notas en matemáticas.</a>
	<a href="3castellano.php">Notas en castellano.</a>
	<a href="4sociales.php">Notas en sociales.</a>
	<br>
	<?php 
 	require 'select.php'
 	?>


</body>
</html>