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
<title>Index</title>
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
	<container>
		<center>
			<img src="recursos/img/index.jpg" width="800" height="auto" class="img-fluid" alt="Responsive image"><br><br>
			<form action="buscar.php" method="post">
				<input type="text" name="nombre" placeholder="Ingresa nombre de Pokemon" size="35"><br><br>
				<button type="submit" class="btn btn-primary">Buscar</button><br><br>
			</container>
		</form>
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<script src="recursos/js/bootstrap.min.js"></script> 
</body>
<div class="footer">
	<center>2018 - All rights reserved</center>
</div>
</html>

