<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 


	$conexion = mysqli_connect("localhost:3307", "root", "", "notas_colegio") or die ("Problemas con la conexion");

	$registros = mysqli_query($conexion,"select nombre, email, telefono, identificacion, idgrupo, edad from registro", )or die("Problemas en el select: ".mysql_error($conexion));

	while ($reg = mysqli_fetch_array($registros)){
		echo "Nombre:".$reg['nombre'] ."<br>";
		echo "Email:".$reg['email'] ."<br>";
		echo "Teléfono:".$reg['telefono'] ."<br>";
		echo "Identificación:".$reg['identificacion'] ."<br>";
		echo "Edad:".$reg['edad'] ."<br>";
		echo "Codigocurso:";

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
</html>