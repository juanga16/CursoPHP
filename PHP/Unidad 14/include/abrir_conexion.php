<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "municipio";

    // Crea la conexion con el servidor
    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Fallo la conexion
    if ($conexion->connect_error) {
        die("Fallo la conexion: ".$conexion->connect_error);
    }
?>