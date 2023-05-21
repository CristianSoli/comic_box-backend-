<?php
//Establecer conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "Cristian_solis18";
$dbname = "comic_box";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar si hay errores de conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}


?>