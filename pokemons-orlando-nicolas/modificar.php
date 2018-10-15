<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<?php

	include("conexion.php");
	mysqli_select_db($conexion, $database) or die("Error de conexión con database");

	if (isset($_POST['imagen']) && isset($_POST['nombre']) && isset($_POST['tipo'])) {
		$imagen = $_POST['imagen'];//url
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];

		if (!empty($nombre) && !empty($imagen) && !empty($tipo)) {
			mysqli_query($conexion, "UPDATE bichos SET imagen = '$imagen' WHERE '$nombre'= nom_pokemon") or die("Error de conexión: No se puede actualizar.");

			mysqli_close($conexion);
			echo "Datos actualizados correctamente";
			echo "No deben haber campos vacíos";

		} else {
			echo "Error: No se pudo modificar.";
			echo "Debe completar todos los campos.";
		}
	}

	?>
	<br><a href="panel.php"><br>Volver</a>
</body>
</html>