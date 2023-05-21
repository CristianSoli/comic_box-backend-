<?php 
$id_comic = $_GET['id_comic'];
$titulo = $_GET['titulo'];
include("../conexion.php");
// Ejecutar el procedimiento almacenado eliminar_comic
$query = "CALL eliminar_comic($id_comic)";
$resultado = mysqli_query($conn, $query);

    if ($resultado) {
        // Procedimiento ejecutado con éxito
        echo "El cómic ha sido eliminado correctamente.";
    } else {
        // Error al ejecutar el procedimiento almacenado
        echo "Error al eliminar el cómic: " . mysqli_error($conexion);
    }

?>


