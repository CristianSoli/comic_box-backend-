<?php 

// Configuración de la conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "Cristian_solis18";
$database = "comic_box";


// Crear una conexión
$conexion = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Preparación de la llamada al procedimiento almacenado
$sentencia = mysqli_prepare($conexion, 'CALL insertar_usuario_y_detalles_usuario(?, ?, ?, ?, ?, ?, ?, ?)');
if (!$sentencia) {
    die('Error al preparar la sentencia: ' . mysqli_error($conexion));
}

// Enlace de los parámetros del procedimiento almacenado
mysqli_stmt_bind_param($sentencia, 'ssssssss', $correo, $contrasena, $nickname, $nombre, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $telefono);

// Asignación de valores a los parámetros
$correo = $_POST["email"];
$contrasena = $_POST["password"];
$nickname = $_POST["nickname"];
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$fecha_nacimiento = '2000-01-01';
$telefono = $_POST["telefono_celular"];

// Ejecución del procedimiento almacenado
if (!mysqli_stmt_execute($sentencia)) {
    die('Error al ejecutar la sentencia: ' . mysqli_error($conexion));
}

// Cierre de la conexión
mysqli_close($conexion);

?>
