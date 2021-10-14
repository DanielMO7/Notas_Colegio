<?php 

	session_start();

	$usuario = $_POST['email'];
	$pass = $_POST['password'];

	$conexion = new mysqli("localhost:3307", "root", "", "notas_colegio");

	$proceso = mysqli_query($conexion, "SELECT * FROM registro WHERE email = '$usuario' AND password = '$pass'")or die("Problemas en el select: ".mysql_error($conexion));

	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		header("Location: usuario.php");
	}
	else{
		header("Location: Login.php");
	}
 ?>