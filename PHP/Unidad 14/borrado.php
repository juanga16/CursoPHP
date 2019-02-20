<?php
    require "include/abrir_conexion.php";
?>

<h1>Borrado de registros</h1>

<?php
    $id = 3;

    $update = "DELETE FROM deudor WHERE id=$id";

    if ($conexion->query($update)) {
        echo "Se elimino el registro";
    } else {
        echo "Error: $conexion->error";
    }

    require "include/cerrar_conexion.php";
?>