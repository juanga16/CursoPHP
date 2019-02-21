<?php
    require "include/abrir_conexion.php";
?>

<h1>Borrado de registros</h1>

<?php
    $id = 1;

    $update = "DELETE FROM pelicula WHERE id=$id";

    if ($conexion->query($update)) {
        echo "Se elimino el registro";
    } else {
        echo "Error: $conexion->error";
    }

    require "include/cerrar_conexion.php";
?>