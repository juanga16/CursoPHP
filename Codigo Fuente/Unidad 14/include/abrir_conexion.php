<?php
    $servidor = "localhost:3310";
    $usuario = "root";
    $password = "";
    $baseDeDatos = "peliculas";

    // Crea la conexion con el servidor    
    $conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

    // Si fallo la conexion
    if (! $conexion) {
        die("Fallo la conexion: ".$conexion->connect_error);
    }
?>