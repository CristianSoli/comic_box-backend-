<?php 
$id_comic = $_GET['id_comic'];
$titulo = $_GET['titulo'];
$sinopsis = $_GET['sinopsis'];
$ruta_imagen = $_GET['ruta_imagen'];
$año_publicacion = $_GET['año_publicacion'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="guardar.php">
    <input type="hidden" name="id_comic" value="<?php echo $id_comic; ?>">
    <input type="text" name="titulo" value="<?php echo $titulo; ?>">
    <br>
    <br>
    <textarea name="sinopsis"><?php echo $sinopsis; ?></textarea>
    </br>
    </br>
    <label for="datetime-input">Fecha y Hora:</label>
    </br>
    <input type="date" id="datetime-input" name="datetime" value="<?php echo $año_publicacion; ?>">
    </br>
    </br>
    <label for="imagen">Imagen</label>
    </br>
    <input type="text" name="imagen" value="<?php echo $ruta_imagen; ?>">
    <br>
    <br>
    <input type="submit" value="Guardar">
</form>





    
</body>
</html>