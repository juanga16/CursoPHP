<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        require "include/abrir_conexion.php";
    ?>

    <div class="container">
        <div class="row">
            <h1>Consultas a la base de datos</h1>
        </div>

        <?php
            // Armo la consulta
            $sql = "SELECT * FROM pelicula ORDER BY calificacion";

            // Ejecutamos la consulta y guardamos el resultado
            $resultado = $conexion->query($sql);

            // Para obtener la cantidad de registros
            echo "<div class='row'>";
            echo "<h2>Cantidad de registros: $resultado->num_rows</h2>";
            echo "</div>";

            if ($resultado->num_rows > 0) {
                echo "<div class='row d-none d-sm-block'>";
                echo "<div class='col-md-1'>Id</div>";
                echo "<div class='col-md-3'>Titulo</div>";
                echo "<div class='col-md-2'>Fecha de Estreno</div>";
                echo "<div class='col-md-1'>Calificacion</div>";
                echo "<div class='col-md-2'>Nacionalidad</div>";
                echo "<div class='col-md-3'>Poster</div>";
                echo "</div>";

                // La funcion fetch_assoc, llena un arreglo con todos los campos y valores del registro
                while($registro = $resultado->fetch_assoc()) {            
                    $fechaEstreno = new DateTime($registro["fecha_estreno"]);

                    // Imprimimos cada fila
                    echo "<div class='row'>";
                    echo "<div class='col-md-1'>".$registro["id"]."</div>";
                    echo "<div class='col-md-3'>".utf8_encode($registro["titulo"])."</div>";
                    echo "<div class='col-md-2'>".$fechaEstreno->format('d/m/Y H:i')."</div>";
                    echo "<div class='col-md-1'>".$registro["calificacion"]."</div>";
                    echo "<div class='col-md-2'>".$registro["nacionalidad"]."</div>";
                    echo "<div class='col-md-3'><img width='50px' src='posters/".$registro["poster"]."'/></div>";
                    echo "</div>";

                    // utf8_encode: sirve para imprimir las ñ correctamente
                }
            }

            require "include/cerrar_conexion.php";
        ?>

    </div>
</body>
</html>