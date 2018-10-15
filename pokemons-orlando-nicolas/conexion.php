<?php
///////////////////////////////// CONEXION ///////////////////////////////////

$host = "localhost";
$usuario = "root";
$password = "newPassword";
$database = "database";

$conexion = mysqli_connect($host, $usuario, $password, $database);

/* comprueba la conexión */
/*if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
	echo "Succsess<br>";
}*/

/*if ($result = mysqli_query($conexion, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n<br>", $row[0]);
    mysqli_free_result($result);
}*/

?> 