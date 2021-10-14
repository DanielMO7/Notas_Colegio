<!DOCTYPE html>
<html>
<head>
	<title>matematicas</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 


	$conexion = mysqli_connect("localhost:3307", "root", "", "notas_colegio") or die ("Problemas con la conexion");

	$registros = mysqli_query($conexion,"select idestudiante, calificación, nombre, idgrupo from matematicas", )or die("Problemas en el select: ".mysql_error($conexion));

	while ($reg = mysqli_fetch_array($registros)){
		echo "Estudiante:".$reg['idestudiante'] ."<br>";
		echo "Calificacion:".$reg['calificación'] ."<br>";
		echo "Nombre:".$reg['nombre'] ."<br>";
		echo "Grupo:";

		switch ($reg['idgrupo']) {
			case 1:
				echo "Matemáticas.";
				break;

			case 2:
				echo "Sociales.";
				break;
			case 3:
				echo "Castellano.";
				break;
		}
		echo "<br>";
		echo "<hr>";
	}
	mysqli_close($conexion);
	?>

</body>