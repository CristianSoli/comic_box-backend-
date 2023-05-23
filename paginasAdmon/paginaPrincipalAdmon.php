<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Administrador</title>
</head>

<body>
<nav>
  <ul>
    <li><a href="Seleccionar.php">Regresar</a></li>
  </ul>
</nav>


    <h1>administrador</h1>
    <form action="prueba.php" method="POST">
                <label for="link">Direccion URL: </label></br>
                <input type="text" name="link">
                </br>
                </br>
                <label for="autor">Autor:</label></br>
                <select name="autor">
                    <option value="1">Grant	Morrison</option>
                    <option value="2">Stan Lee</option>
                    <option value="3">Alan Moore</option>
                    <option value="4">Frank	Miller</option>
                    <option value="5">Jack	Kirby</option>
                    <option value="6">Junji	ito</option>
                    <option value="7">Brian Michael Bendis</option>
                    <option value="8">Josep Michael Straczynski</option>
                    <option value="9">Max Landis</option>
                </select>
                </br>
                </br>
                <label for="clasificacion">Clasificacion:</label></br>
                <select name="clasificacion">
                    <option value="1">Todo publico</option>
                    <option value="2">Jovenes</option>
                    <option value="3">Jovenes adultos</option>
                    <option value="4">Audiencia madura</option>
                </select>
                </br>
                </br>
                <label for="editorial">Editorial: </label></br>
                <select name="editorial">
                    <option value="1">Panini</option>
                    <option value="2">Marvel comics</option>
                    <option value="3">DC comics</option>
                    <option value="4">Kadokawa</option>
                </select>
                </br>
                </br>
                <label for="titulo">Titulo:</label></br>
                <input type="text" name="titulo">
                </br>
                </br>
                <label for="sinopsis">Sinopsis:</label></br>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="10"></textarea>
                </br>
                </br>
                <label for="datetime-input">Fecha y Hora:</label>
                </br>
                <input type="datetime-local" id="datetime-input" name="datetime">
                </br>
                </br>
                <label for="imagen">Imagen</label>
                </br>
                <input type="text" name="imagen">
                <br>
                <br>
                <label for="subcategoria">Categoria: </label></br>
                <select name="subcategoria">
                    <option value="1">Terror</option>
                    <option value="2">Super Heroes</option>
                    <option value="3">Drama</option>
                    <option value="5">Accion</option>
                    <option value="6">Aventura</option>
                    <option value="7">Ciencia ficcion</option>
                    <option value="8">Comedia</option>
                    <option value="9">Misterio</option>
                    <option value="10">Biografico</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Enviar">
        </form>
            
</body>

</html>
