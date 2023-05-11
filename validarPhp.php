<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "Cristian_solis18";
$dbname = "comic_box";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Crear una consulta preparada que invoque al procedimiento almacenado
$query = "CALL validar_contrasena(?, ?, @valido)";

// Preparar la consulta
$stmt = $conn->prepare($query);

// Verificar si hay errores de preparación
if (!$stmt) {
    echo "Error al preparar la consulta: " . $conn->error;
}

// Pasar los parámetros necesarios al procedimiento almacenado
$usuario = $_POST["username"];
$contrasena = $_POST["password"];
$stmt->bind_param("ss", $usuario, $contrasena);

// Ejecutar la consulta
if (!$stmt->execute()) {
    echo "Error al ejecutar la consulta: " . $stmt->error;
}

// Obtener el resultado del procedimiento almacenado
$result = $conn->query("SELECT @valido as valido");
$row = $result->fetch_assoc();
$valido = (bool) $row['valido'];

// Mostrar el resultado
if ($valido) {
    echo "La contraseña es correcta";
} else {
    echo "La contraseña es incorrecta";
}

// Cerrar la conexión
$stmt->close();
$conn->close(); 
?>
