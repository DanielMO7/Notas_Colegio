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

	<?php 

	session_start();
	if (isset($_SESSION['u_usuario']))
	{
 	echo "Sesion exitosa BIENVENIDO ";

	}else{
		header("Location: inicio.php");
	}
 	?>
</body>