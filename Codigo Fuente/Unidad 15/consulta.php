<?php
    require "include/abrir_conexion.php";
?>

<h1>Consultas a la base de datos</h1>

<?php
    // Armo la consulta
    $sql = "SELECT * FROM pelicula ORDER BY calificacion";

    // Ejecutamos la consulta y guardamos el resultado
    $resultado = $conexion->query($sql);

    // Para obtener la cantidad de registros
    echo "<h2>Cantidad de registros: $resultado->num_rows</h2>";

    if ($resultado->num_rows > 0) {
        // La funcion fetch_assoc, llena un arreglo con todos los campos y valores del registro
        while($registro = $resultado->fetch_assoc()) {
            $fechaEstreno = new DateTime($registro["fecha_estreno"]);

            // Imprimimos cada fila
            echo "<p>Id: ".$registro["id"]."<p/>";
            echo "<p>Titulo: ".utf8_encode($registro["titulo"])."<p/>";
            echo "<p>Fecha de Estreno: ".$fechaEstreno->format('d/m/Y H:i')."<p/>";
            echo "<p>Calificacion: ".$registro["calificacion"]."<p/>";
            echo "<p>Nacionalidad: ".$registro["nacionalidad"]."<p/>";
            echo "<img width='200px' src='posters/".$registro["poster"]."'/>";

            // utf8_encode: sirve para imprimir las ñ correctamente
        }
    }

    require "include/cerrar_conexion.php";
?>