




<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/paTabla.css">
    <title>Variables en HTML</title>
</head>

<body>
    <?php include "menu_navegacion.php" ?>

    <?php
include "../conexion.php";
// Ejecutar la consulta SELECT para obtener los datos de la vista
$resultado = mysqli_query($conn, "SELECT * FROM mostrar_comic_completo");

// Verificar si hay errores en la consulta
if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
    exit();
}


// Imprimir los resultados en una tabla HTML
echo '<table class="mostrarDatos">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Título</th>';
echo '<th>Sinopsis</th>';
echo '<th>Año publicacion</th>';
echo '<th>Editar</th>';
echo '<th>Eliminar</th>';
echo '</tr>';
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>' . $fila['id_comic'] . '</td>';
    echo '<td>' . $fila['titulo'] . '</td>';
    echo '<td>' . $fila['sinopsis'] . '</td>';
    echo '<td style="display: none;">' . $fila['ruta_imagen'] . '</td>';
    echo '<td>' . $fila['año_publicacion'] . '</td>';

    //Modificar valores; se envian parametros por URL
    echo '<td><a href="modificar.php?titulo=' . urlencode($fila['titulo']) 
    . '&sinopsis=' . urlencode($fila['sinopsis'])
    . '&id_comic=' . urlencode($fila['id_comic']) 
    . '&ruta_imagen=' . urlencode($fila['ruta_imagen'])
    . '&año_publicacion=' . urlencode($fila['año_publicacion'])
    . '">Editar</a></td>';

    //ELiminar linea 
    echo '<td><a href="eliminar.php?id_comic=' . urlencode($fila['id_comic']) 
    .'&titulo='. urlencode($fila['titulo'])
    .'" onclick="return confirmarEliminar();">Eliminar</a></td>';

    echo '</tr>';
}
echo '</table>';

echo '<script>';
echo 'function confirmarEliminar() {';
echo '    return confirm("¿Estás seguro de que deseas eliminar el cómic?");';
echo '}';
echo '</script>';




// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>

<form action="../destruir_sesion.php" method="POST">
    <input type="submit" value="Destruir sesión">
</form>

    
</body>

</html>
