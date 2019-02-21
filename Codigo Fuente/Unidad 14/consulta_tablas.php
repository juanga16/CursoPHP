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
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Titulo</th>";
        echo "<th>Fecha de Estreno</th>";
        echo "<th>Calificacion</th>";
        echo "<th>Nacionalidad</th>";
        echo "<th>Poster</th>";
        echo "</tr>";

        // La funcion fetch_assoc, llena un arreglo con todos los campos y valores del registro
        while($registro = $resultado->fetch_assoc()) {            
            $fechaEstreno = new DateTime($registro["fecha_estreno"]);

            // Imprimimos cada fila
            echo "<tr>";
            echo "<td>".$registro["id"]."<td/>";
            echo "<td>".utf8_encode($registro["titulo"])."<td/>";
            echo "<td>".$fechaEstreno->format('d/m/Y H:i')."<td/>";
            echo "<td>".$registro["calificacion"]."<td/>";
            echo "<td>".$registro["nacionalidad"]."<td/>";
            echo "<td><img width='50px' src='posters/".$registro["poster"]."'/></td>";
            echo "</tr>";

            // utf8_encode: sirve para imprimir las ñ correctamente
        }

        echo "</table>";
    }

    require "include/cerrar_conexion.php";
?>