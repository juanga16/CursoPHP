<?php
    require "include/abrir_conexion.php";
?>

<h1>Insercion de registros</h1>

<?php
    try { 
        // Seteamos los parametros
        $titulo = "El Padrino";
        $fechaEstreno = "1972-10-20 18:10";
        $calificacion = 9.2;
        $nacionalidad = "Estados Unidos";
        $poster = "elpadrino.jpg";

        // Preparo el insert y bindeo los parametros
        $insert = $conexion->prepare("INSERT INTO pelicula (titulo, fecha_estreno, calificacion, nacionalidad, poster) VALUES (?, ?, ?, ?, ?)");
        $insert->execute(array($titulo, $fechaEstreno, $calificacion, $nacionalidad, $poster));

        // Obtengo el ID del registro insertado
        $ultimoID = $conexion->lastInsertId();

        echo "<h2>$ultimoID</h2>";
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     

    $insert = null;
    require "include/cerrar_conexion.php";
?>