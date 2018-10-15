<?php 
session_start();
include("conexion.php");
if (isset($_SESSION['user'])) {
	echo '"<script window.location="panel.php"></script>"';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content=""width=device-width, initial-scale=1"">
	<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: #0066ff;
		color: white;
		text-align: center;
	}
</style>
<title>Login</title>
<link href="recursos/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<img src="recursos/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	<a class="navbar-brand" href="index.php">Busca Pokemons</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
		</ul>
	</div>
</nav>
<body>
	<form action="validar.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col align-self-center w-50 p-3">
					<br><br><h3>Iniciar sesión</h3>
					<div class="form-group">
						<label for="inputUser1">Usuario</label>
						<input type="text" class="form-control" id="inputUser1" name="usuario" placeholder="Ingrese usuario" required>
					</div>
					<div class="form-group">
						<label for="InputPassword1">Contraseña</label>
						<input type="password" class="form-control" id="inputPassword1" placeholder="Ingrese contraseña" required name="pw">
						<br><button type="submit" class="btn btn-primary">Ingresar</button>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<script src="recursos/js/bootstrap.min.js"></script> 
</body>
<div class="footer">
	<center>2018 - All rights reserved</center>
</div>
</html>
