<?php
// Obtener los valores del formulario
$link = $_POST['link'];
$autor = $_POST['autor'];
$clasificacion = $_POST['clasificacion'];
$editorial = $_POST['editorial'];
$titulo = $_POST['titulo'];
$sinopsis = $_POST['sinopsis'];
$fechaHora = $_POST['datetime'];
$imagen = $_POST['imagen'];
$subcategoria = $_POST['subcategoria'];

// Conexión a la base de datos
include("../conexion.php");


// Llamar al procedimiento almacenado
$sql = "CALL insertar_comic_detalles_comic('$link',$autor, $clasificacion, $editorial, '$titulo', '$sinopsis', '$fechaHora', '$imagen', $subcategoria)";
$result = $conn->query($sql);

if ($result === TRUE) {
    
    echo "¡El comic y sus detalles se han insertado correctamente!";

} else {
    echo "Error al insertar el comic: " . $conn->error;
}

$conn->close();
?>
