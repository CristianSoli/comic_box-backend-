<?php
// Conexión a la base de datos
session_start();
include "../../conexion.php";

// Crear una consulta preparada que invoque al procedimiento almacenado
$query = "CALL validar_contrasena(?, ?, @valido, @tipo)";

// Preparar la consulta
$stmt = $conn->prepare($query);

// Verificar si hay errores de preparación
if (!$stmt) {
    echo "Error al preparar la consulta: ";
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
$result = $conn->query("SELECT @valido as valido, @tipo as tipo");
$row = $result->fetch_assoc();
$valido = (bool) $row['valido'];
$tipo = (int) $row['tipo'];

// Mostrar el resultado
if ($valido) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["tipo"] = $tipo;
    setcookie("usuario", $usuario, time() + (7 * 24 * 60 * 60), "/");
    setcookie("tipo", $tipo, time() + (7 * 24 * 60 * 60), "/");

    if($tipo == 0){
        header("Location: ../../paginasUsuario/paginaPrincipalUsuario.php");
        exit();  
    }
    elseif($tipo == 1){
        header("Location: ../../paginasAdmon/paginaPrincipalAdmon.php");
        exit();
    }
} else {
    echo "La contraseña es incorrecta";
}

// Cerrar la conexión
$stmt->close();
$conn->close(); 
?>
