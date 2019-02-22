<?php
    require "include/abrir_conexion.php";
?>

<h1>Consultas a la base de datos</h1>

<?php
    // Armo la consulta
    $consulta = $conexion->prepare("SELECT * FROM pelicula ORDER BY calificacion");
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    // Para obtener la cantidad de registros
    echo "<h2>Cantidad de registros: ".$consulta->rowCount()."</h2>";

    if ($resultado) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Titulo</th>";
        echo "<th>Fecha de Estreno</th>";
        echo "<th>Calificacion</th>";
        echo "<th>Nacionalidad</th>";
        echo "<th>Poster</th>";
        echo "</tr>";

        foreach ($resultado as $registro) {
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

    $consulta = null;
    $resultado = null;
    require "include/cerrar_conexion.php";
?>