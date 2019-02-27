<?php
    $servidor = "localhost:3310";
    $usuario = "root";
    $password = "";
    $baseDeDatos = "biblioteca";    

    try {
        // Crea la conexion con el servidor    
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password);
    } catch (PDOException $excepcion) {
        echo 'Falló la conexión: ' . $excepcion->getMessage();
    }
?>