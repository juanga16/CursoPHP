<?php
    // Comparar APIs: http://php.net/manual/es/mysqlinfo.api.choosing.php
    // Estos ejemplos estan basados en PDO que significa PHP Data Object

    $servidor = "localhost:3306";
    $usuario = "root";
    $password = "";
    $baseDeDatos = "peliculas";    

    try {
        // Crea la conexion con el servidor    
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password);
    } catch (PDOException $excepcion) {
        echo 'Falló la conexión: ' . $excepcion->getMessage();
    }
?>