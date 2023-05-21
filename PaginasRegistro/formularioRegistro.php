<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login-styles.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Registro</h1>
</header>
<div class="formulario">
    <section class="seccionRegistro"></section>
    <form action="../assets/procesar/procesar_formulario.php" method="post">

        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido_paterno">Apellido paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required><br><br>

        <label for="apellido_materno">Apellido materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" required><br><br>

        <label for="telefono_celular">Teléfono celular:</label>
        <input type="tel" id="telefono_celular" name="telefono_celular" required><br><br>

        <input id="boton" type="submit" value="Registrarse">
        
    </form>
    </div>
</body>
</html>
