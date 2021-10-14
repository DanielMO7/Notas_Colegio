<!DOCTYPE html>
<html>
<head>
	<title>castellano</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="usuario.php">Atras.</a>
	<?php 


	$conexion = mysqli_connect("localhost:3307", "root", "", "notas_colegio") or die ("Problemas con la conexion");

	$registros = mysqli_query($conexion,"select idestudiante, calificacion, nombre, idgrupo from castellano", )or die("Problemas en el select: ".mysql_error($conexion));

	while ($reg = mysqli_fetch_array($registros)){
		echo "<h2>Calificacion: </h2>"."<br>";
		echo "Estudiante:".$reg['idestudiante'] ."<br>";
		echo "Calificacion:".$reg['calificacion'] ."<br>";
		echo "Nombre:".$reg['nombre'] ."<br>";
		echo "Grupo:";

		switch ($reg['idgrupo']) {
			case 1:
				echo "Sociales.";
				break;

			case 2:
				echo "Matemáticas.";
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
	<a href="usuario.php">Atras.</a>
</body>