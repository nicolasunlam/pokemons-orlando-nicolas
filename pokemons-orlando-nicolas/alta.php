<!DOCTYPE html>
<html>
<head>
	<meta lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content=""width=device-width, initial-scale=1"">
	<title>Alta</title>
	<link href="recursos/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<center>
		<?php

		include ("conexion.php");
		mysqli_select_db($conexion, $database) or die("Error de conexión");

		if (isset($_POST['imagen']) && isset($_POST['nombre']) && isset($_POST['tipo'])) {

		$imagen = $_POST['imagen'];//url
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];

		if (!empty($nombre) && !empty($imagen) && !empty($tipo)){
			
			$insertar = "INSERT INTO bichos (imagen, nom_pokemon, tipo) values ('".$imagen."', '".$nombre."', '".$tipo."')";
			$resultado = mysqli_query($conexion, $insertar) or die ("Error de conexión: No se pudo ingresar.");

			mysqli_close($conexion);
			echo "Datos insertados correctamente";
			
		} else {
			echo "Error: no debe haber campos vacíos";
		}
	}
	
	?>	 
	<a href="panel.php"><br>Volver</a>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="recursos/js/bootstrap.min.js"></script>
</body>
</html>