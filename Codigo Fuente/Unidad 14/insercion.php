<?php
    require "include/abrir_conexion.php";
?>

<h1>Insercion de registros</h1>

<?php
    // Preparo el insert y bindeo los parametros
    $insert = $conexion->prepare("INSERT INTO pelicula (titulo, fecha_estreno, calificacion, nacionalidad, poster) VALUES (?, ?, ?, ?, ?)");
    $insert->bind_param("ssdss", $titulo, $fechaEstreno, $calificacion, $nacionalidad, $poster);

    // http://php.net/manual/es/mysqli-stmt.bind-param.php
    
    // Seteamos los parametros
    $titulo = "El Padrino";
    $fechaEstreno = "1972-10-20 18:10";
    $calificacion = 9.2;
    $nacionalidad = "Estados Unidos";
    $poster = "elpadrino.jpg";
    
    // Ejecutamos la insercion
    $insert->execute();
    $resultado = $insert->get_result();

    echo "<h2>Error: $insert->error</h2>";

    // Obtengo el ID del registro insertado
    $ultimoID = $conexion->insert_id;

    echo "<h2>$ultimoID</h2>";

    require "include/cerrar_conexion.php";
?>