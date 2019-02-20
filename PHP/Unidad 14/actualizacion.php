<?php
    require "include/abrir_conexion.php";
?>

<h1>Actualizacion de registros</h1>

<?php
    $deuda = 999;
    $fechaCalculo = date("Y-m-d");
    $id = 50;

    $update = "UPDATE deudor SET deuda='$deuda', fecha_calculo = '$fechaCalculo' WHERE id=$id";

    if ($conexion->query($update)) {
        echo "Se actualizo el registro";
    } else {
        echo "Error: $conexion->error";
    }

    require "include/cerrar_conexion.php";
?>