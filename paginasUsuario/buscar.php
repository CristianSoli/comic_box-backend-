<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@700&display=swap" rel="stylesheet">
    <!--*Flecha-->
    <link rel="stylesheet" href="link rel=" stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Variables en HTML</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" href="../assets/css/ppUsuario-style.css">

</head>

<body>
    <?php include "./menu_navegacion.php" ?>
</body>
</html>









<?php
// Obtener el valor enviado desde el formulario
$nombre = $_POST['buscar'];

include("../conexion.php");

// Preparar la consulta SQL con el procedimiento almacenado
$sql = "CALL buscar_comic_por_nombre(?)";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Vincular el parámetro de entrada
$stmt->bind_param("s", $nombre);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados de la consulta
$result = $stmt->get_result();

// Mostrar los resultados
echo '<div class="netflix-section">';
echo '<h2 class="titulo">Disponible en comics</h2>';
echo '<div class="netflix-grid">';
// Imprimir los resultados en una tabla HTML
while ($fila = mysqli_fetch_assoc($result)) {
    echo '<div class="netflix-item">';
    echo '<a href="' . $fila["referencia"] . '">';
    echo '<img src="' . $fila["ruta_imagen"] . '" alt="' . $fila["titulo"] . '">';
    echo '<h3>' . $fila["titulo"] . '</h3>';
    echo '<p>' . $fila["sinopsis"] . '</p>';
    echo '</a>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
// Cerrar la conexión y liberar recursos
$stmt->close();
$conn->close();
?>