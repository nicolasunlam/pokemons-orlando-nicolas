<!DOCTYPE html>
<html>
<head>
	<meta lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content=""width=device-width, initial-scale=1"">
	<title>Búsqueda</title>
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
				<a class="nav-link" href="#">Login</a>
			</li>
		</ul>
		
	</div>
</nav>

<body>
	<center>
		<?php
		include ("conexion.php");
		mysqli_select_db($conexion, $database);
		
		if (isset($_POST['nombre'])) {
			$nombre = $_POST['nombre'];
			$pokemons = mysqli_query($conexion, "SELECT * FROM bichos WHERE nom_pokemon = '$nombre' ");
			$traerTablaBichos = "SELECT * FROM bichos";
			$tablaBichos= mysqli_query($conexion, $traerTablaBichos);

			if (!empty($nombre)) {
				while ($row = mysqli_fetch_array($pokemons)) {
					$nom_pokemon = $row['nom_pokemon'];
					$tipo = $row['tipo'];
					$imagen = $row['imagen'];
					$encoding = mb_detect_encoding($tipo, "UTF-8,ISO-8859-1");
					$tipo = iconv($encoding, 'UTF-8',$tipo);
				}

				$encontrado = false;
				foreach ($pokemons as $name => $pokemon) {
					if ($nombre == $name) {
						$encontrado = true;
					}
				}

				if ($encontrado == true) {
					echo '<h1>Buscaste a:</h1><br>';
					echo '<img src="'.$imagen.'"class="img-fluid" alt="Responsive image height="auto" width="350">' ."<br><br>";
					echo "Nombre: "." ".$nom_pokemon."<br>";
					echo "Tipo: "." ".$tipo;
				}

				else {
					echo "</br>";
					echo ( '<h2>"Lo sentimos, no tenemos informacion de ese pokemon"</h2>');
					echo "'<h1>Pokemons: </h1><br><br>'";

					while ($row = mysqli_fetch_array($tablaBichos)) {
						$tipo = $row['tipo'];
						$encoding = mb_detect_encoding($tipo, "UTF-8,ISO-8859-1");
						$tipo = iconv($encoding, 'UTF-8',$tipo);
						echo '<img src="'.$row['imagen'].'"class="img-fluid" alt="Responsive image height="auto" width="350">'."<br><br>";
						echo $row['nom_pokemon']."<br>";
						echo "Tipo: ".$tipo."<br><br><br><br>";
					}				
				}	
			}

			if (empty($nombre)) {
				echo "'<h1>¡Estos son todos los Pokemons!</h1><br><br>'";

				while ($row = mysqli_fetch_array($tablaBichos)) {
					$tipo = $row['tipo'];
					$encoding = mb_detect_encoding($tipo, "UTF-8,ISO-8859-1");
					$tipo = iconv($encoding, 'UTF-8',$tipo);
					echo '<img src="'.$row['imagen'].'" class="img-fluid" alt="Responsive image height="auto" width="350"">'."<br><br>";
					echo $row['nom_pokemon']."<br>";
					echo "Tipo: ".$tipo."<br><br><br><br>";
				}				
			}
		}
		
		?>
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<script src="recursos/js/bootstrap.min.js"></script>
</body><br><br>
<footer>
	<center>2018 - All rights reserved</center>
</footer>
</html>