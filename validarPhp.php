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

// Verificar si se envió el formulario
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtener el nombre de usuario y la contraseña enviados por el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar si el usuario existe en la base de datos
    $sql = "SELECT * FROM usuario WHERE nickname = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // El usuario existe en la base de datos
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['contraseña'])) {
            // La contraseña es correcta
            session_start();
            echo "Contraseña correcta";
            exit();
        } else {
            // La contraseña es incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // El usuario no existe en la base de datos
        echo "El usuario no existe.";
    }
}
?>