<?php
session_start();

//verifica que exista una sesion con el nombre de usuario o una cookie con ese nombre
if ((isset($_SESSION["usuario"]) or isset($_COOKIE["usuario"])) 
AND ($_COOKIE["tipo"] = 0)) {
    header("Location: ../paginasUsuario/paginaPrincipalUsuario.php");
    exit();
}
elseif ((isset($_SESSION["usuario"]) or isset($_COOKIE["usuario"])) 
AND ($_COOKIE["tipo"] = 1)) {
    header("Location: ../paginasAdmon/paginaPrincipalAdmon.php");
    exit();
}
?>
