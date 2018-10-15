<!DOCTYPE html>
<html>
<head>
	<title>Baja</title>
</head>
<body>

	<?php

	include ('conexion.php');
	mysqli_select_db($conexion,$database) or die("Error de conexión con database");

	if (isset($_POST['nombre'])) {
		$nombre = $_POST['nombre'];

		if (!empty($nombre)) {
			$eliminar = "DELETE FROM bichos WHERE nom_pokemon = '$nombre'";
			$resultado = mysqli_query($conexion, $eliminar) or die ("Error: No se pudo borrar el registro");

			mysqli_close($conexion);
			echo "Registro borrado con éxito";

		} else {
			echo "Error: nombre incorrecto o campo vacío.<br>";
			echo "Vuelva a ingresar nombre.";
		}
	}

	?>
	<a href="panel.php"><br>Volver</a>
</body>
</html>