<?php
    require "include/abrir_conexion.php";
?>

<h1>Actualizacion de registros</h1>

<?php
    $calificacion = 8.7;
    $fechaEstreno = "2004-01-25 10:00";
    $id = 1;

    $update = "UPDATE pelicula SET calificacion=$calificacion, fecha_estreno = '$fechaEstreno' WHERE id=$id";

    echo $update;
    echo "<br>";

    if ($conexion->query($update)) {
        echo "Se actualizo el registro";
    } else {
        echo "Error: $conexion->error";
    }

    require "include/cerrar_conexion.php";
?>