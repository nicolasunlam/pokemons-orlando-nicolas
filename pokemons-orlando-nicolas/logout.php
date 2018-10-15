<?php 
session_start();
session_destroy();
echo "Cerraste sesión";
echo '<script>window.location="index.php"</script>';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="es">
	<title>Saliendo</title>
</head>
<body>
</body>
</html>