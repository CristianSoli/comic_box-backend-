<!-- Formulario de inicio de sesión -->
<?php

include("../perseverar_sesion.php");

?>

<link href="https://fonts.googleapis.com/css2?family=Atma:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/login-styles.css">


<form method="POST" action="../assets/procesar/validarPhp.php">
<h1>Iniciar Sesión</h1> 
<div class="login">
    
    <br>
    <div class="cosas">
    <label for="username">Usuario:</label>
    <br>
    <input type="text" name="username" required>
<br>
    <label for="password">Contraseña:</label>
    <br>
    <input type="password" name="password" required>
<br>
<br>
<button type="submit">Iniciar sesión</button>
    <br>
    </div>   
    </div>

</form>

