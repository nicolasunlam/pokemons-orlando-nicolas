<?php 
session_start();	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="es">
	<title>Validar</title>
</head>
<body>

	<?php 
	include "conexion.php";
	if (isset($_POST['usuario'])) {
		$usuario = $_POST['usuario'];
		$pw = $_POST['pw'];
		$query = mysqli_query($conexion, "SELECT * FROM admin WHERE usuario = '$usuario' AND pw = '$pw'");
		if (mysqli_num_rows($query)>0) {
			$row = mysqli_fetch_array($query);
			$_SESSION['usuario'] = $row['usuario'];
			echo 'Iniciando sesión para .'.$_SESSION['usuario'].'<p>';
			echo '<script>window.location="panel.php"</script>';
		} else {
			echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			echo '<script>window.location="login.php"</script>';
		}
	}

	?>

</body>
</html>