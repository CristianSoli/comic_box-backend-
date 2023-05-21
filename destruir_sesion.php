<?php
session_start();
setcookie("tipo", "", time() - 3600, "/");
setcookie("usuario", "", time() - 3600, "/");
session_unset();
session_destroy();


header("Location: ./PaginasRegistro/login.php");
exit();


?>