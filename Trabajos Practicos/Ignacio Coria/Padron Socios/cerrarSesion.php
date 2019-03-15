<?php

session_start(); //iniciar sesion
session_unset();//Libera todas las variables de sesión
session_destroy(); //destruir sesion
 
header("location: index.php");

?>