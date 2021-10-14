<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

	$conexion = mysqli_connect("localhost:3307", "root", "", "notas_colegio") or die ("Problemas con la conexion");

	mysqli_query($conexion, "insert into registro(nombre, email, telefono, identificacion, edad, idgrupo, password) values('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[telefono], $_REQUEST[identificacion], $_REQUEST[edad], $_REQUEST[idgrupo], $_REQUEST[password])")or die("Problemas en el selct: " .mysqli_error($conexion));

	mysqli_close($conexion);
	echo "El alumno ha sido agregado satisfactoriamente.";
 ?>
 <a href="Login.php">Logueta para continuar.</a>
</body>
</html>