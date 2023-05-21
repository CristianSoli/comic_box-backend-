<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"]; 
    setcookie("usuario", $_SESSION["usuario"], time() + (7 * 24 * 60 * 60), "/");
    header("Location: ../paginasRegistro/login.php");
    exit();
}
?>


