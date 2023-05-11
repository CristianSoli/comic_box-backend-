<?php
// Definimos un estilo CSS para el div decorado
$style = "
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    margin: 10px;
    display: inline-block; 
    height: 200px;

";

// Definimos la ruta y el nombre de la imagen que queremos insertar
$image_path = "ruta/de/la/imagen.jpg";

// Creamos el código HTML para la imagen
$image_html = "<img src=\"$image_path\">";

// Creamos una cadena de texto que contenga el código HTML para el div, incluyendo la imagen
$div_html = "<div style=\"$style\">$image_html Este es el contenido del div</div>";

// Imprimimos el código HTML para el div 5 veces utilizando un bucle for
for ($i = 0; $i < 5; $i++) {
    echo $div_html;
}
?>

<?php
// Conexión a la base de datos
$host = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificación de conexión
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta de datos
$sql = "SELECT * FROM tu_tabla";
$result = mysqli_query($conn, $sql);

// Generación de divs
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<h3>" . $row["titulo"] . "</h3>";
    echo "<p>" . $row["descripcion"] . "</p>";
    echo "</div>";
  }
} else {
  echo "0 resultados";
}

// Cierre de conexión
mysqli_close($conn);
?>
