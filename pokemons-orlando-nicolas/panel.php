<?php
session_start();
include 'conexion.php';
if (isset($_SESSION['usuario'])) {?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="es">
	<meta name="viewport" content=""width=device-width, initial-scale=1"">

	<title>Admin</title>
	<link href="recursos/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<center>
		<br><h3>Alta de Pokemons</h3><br><br>
		<form action="alta.php" method="POST">
			<input type="text" name="nombre" placeholder="Ingrese Pokemon" size="40" required><br><br>
			<input type="text" name="imagen" placeholder="Ingrese url = recursos/img/nombreImagen.png" size="40" required><br><br>
			<input type="text" name="tipo" placeholder="Ingrese tipo Pokemon" size="40" required><br><br>
			<input type="submit" name="enviar" value="Ingresar">
		</form>
<br><br><a href="logout.php">Salir</a>
		<p>------------------------------------------------------------------------------------------------</p>

		<br><h3>Baja de Pokemons</h3><br><br>

		<form action="baja.php" method="POST">
			<input type="text" name="nombre" placeholder="Ingrese nombre de Pokemon" size="40" required><br><br>
			<input type="submit" name="submit" value="Borrar">
		</form>
<br><br><a href="logout.php">Salir</a>
		<p>------------------------------------------------------------------------------------------------</p>

		<br><h3>Modificacion de Pokemons</h3><br><br>
		<form action="modificar.php" method="POST">
			<input type="text" name="nombre" placeholder="Pokemon" size="40" required><br><br>
			<input type="text" name="imagen" placeholder="recursos/img/nombreImagen.png" size="40" required><br><br>
			<input type="text" name="tipo" placeholder="tipo" size="40" required><br><br>
			<input type="submit" name="submit" value="Modificar"><br><br>
			<br>
		</form>
		<br><a href="logout.php">Salir</a><br>
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<script src="recursos/js/bootstrap.min.js"></script>
</body>
</html>

<?php
} else {
	echo '<script> window.location="login.php"';
}

  ?>