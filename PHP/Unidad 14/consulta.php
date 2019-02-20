<?php
    require "include/abrir_conexion.php";
?>

<h1>Consultas a la base de datos</h1>

<?php
    $sql = "SELECT * FROM deudor";
    $resultado = $conexion->query($sql);

    echo "<h2>Cantidad de registros: $resultado->num_rows</h2>";

    if ($resultado->num_rows > 0) {
        // La funcion fetch_assoc, llena los
        while($fila = $resultado->fetch_assoc()) {
            // Imprimimos cada fila
            echo "Id: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Apellido: " . $fila["apellido"]. " - Deuda: " . $fila["deuda"] . " - Fecha: " . $fila["fecha_calculo"] . "<br>";
        }
    }

    require "include/cerrar_conexion.php";
?>