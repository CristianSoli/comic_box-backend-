<?php
// Establecer la conexión a la base de datos
include("../conexion.php");

// Obtener los valores del formulario
$id_comic = $_POST['id_comic'];
$titulo = $_POST['titulo'];
$sinopsis = $_POST['sinopsis'];
$año_publicacion = $_POST['datetime'];
$ruta_imagen = $_POST['imagen'];

// Llamar al procedimiento almacenado
$stmt = $conn->prepare("CALL modificar_comic(?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $id_comic, $titulo, $sinopsis, $año_publicacion, $ruta_imagen);
$stmt->execute();

$stmt->close();
$conn->close();
?>
