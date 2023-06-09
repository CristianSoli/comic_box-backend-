<?php include("../conexion.php"); ?>
<?php include("../validar_sesion.php"); ?>
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
    <?php include("./menu_navegacion.php"); ?>

</body>

</html>



<?php
// Establecer conexión a la base de datos
include "../conexion.php";

// Ejecutar la consulta SELECT para obtener los datos de la vista
$resultado = mysqli_query($conn, "SELECT * FROM buscar_categoria_cienciaficcion");

// Verificar si hay errores en la consulta
if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
    exit();
}

echo '<div class="netflix-section">';
echo '<h2 class="titulo">Disponible en comics</h2>';
echo '<div class="netflix-grid">';

// Imprimir los resultados en una tabla HTML
while ($fila = mysqli_fetch_assoc($resultado)) {
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

// Cerrar la conexión a la base de datos
?>

