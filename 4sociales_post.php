<!DOCTYPE html>
<html>
<head>
	<title>castellano</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

	$conexion = mysqli_connect("localhost:3307", "root", "", "notas_colegio") or die ("Problemas con la conexion");

	mysqli_query($conexion, "insert into sociales(idestudiante, calificacion, nombre, idgrupo) values('$_REQUEST[idestudiante]', '$_REQUEST[calificacion]', '$_REQUEST[nombre]', $_REQUEST[idgrupo])")or die("Problemas en el selct: " .mysqli_error($conexion));

	mysqli_close($conexion);
	echo "El alumno ha sido agregado satisfactoriamente.";
 ?>
</body>