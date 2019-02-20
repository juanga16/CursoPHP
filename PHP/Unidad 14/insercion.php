<?php
    require "include/abrir_conexion.php";
?>

<h1>Insercion de registros</h1>

<?php
    // Preparo el insert y bindeo los parametros
    $insert = $conexion->prepare("INSERT INTO deudor (nombre, apellido, deuda, fecha_calculo) VALUES (?, ?, ?, ?)");
    $insert->bind_param("ssds", $nombre, $apellido, $deuda, $fechaCalculo);

    // http://php.net/manual/es/mysqli-stmt.bind-param.php
    
    // Seteamos los parametros
    $nombre = "Stephen";
    $apellido = "Curry";
    $deuda = 10000;
    $fechaCalculo = date("Y-m-d");

    // Ejecutamos la insercion
    $insert->execute();
    $resultado = $insert->get_result();

    echo "<h2>Error: $insert->error</h2>";

    // Obtengo el ID del registro insertado
    $ultimoID = $conexion->insert_id;

    echo "<h2>$ultimoID</h2>";

    require "include/cerrar_conexion.php";
?>