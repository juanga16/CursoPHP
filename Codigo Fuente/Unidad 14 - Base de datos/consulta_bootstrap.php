<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
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
            $consulta = $conexion->prepare("SELECT * FROM pelicula ORDER BY calificacion");
            $consulta->execute();
            // Trae todos los registros y los carga en un array
            $resultado = $consulta->fetchAll();

            // Para obtener la cantidad de registros
            echo "<div class='row'>";
            echo "<h2>Cantidad de registros: ".$consulta->rowCount()."</h2>";
            echo "</div>";

            if ($resultado) {
                echo "<div class='row'>";
                echo "<div class='col-md-1 hidden-xs bg-info'>Id</div>";
                echo "<div class='col-md-3 hidden-xs bg-info'>Titulo</div>";
                echo "<div class='col-md-2 hidden-xs bg-info'>Fecha de Estreno</div>";
                echo "<div class='col-md-1 hidden-xs bg-info'>Calificacion</div>";
                echo "<div class='col-md-2 hidden-xs bg-info'>Nacionalidad</div>";
                echo "<div class='col-md-3 hidden-xs bg-info'>Poster</div>";
                echo "</div>";

                foreach ($resultado as $registro) {         
                    $fechaEstreno = new DateTime($registro["fecha_estreno"]);

                    // Imprimimos cada fila
                    echo "<div class='row'>";
                    echo "<div class='col-md-1 col-xs-12'>".$registro["id"]."</div>";
                    echo "<div class='col-md-3 col-xs-12'>".utf8_encode($registro["titulo"])."</div>";
                    echo "<div class='col-md-2 col-xs-6'>".$fechaEstreno->format('d/m/Y H:i')."</div>";
                    echo "<div class='col-md-1 col-xs-6'>".$registro["calificacion"]."</div>";
                    echo "<div class='col-md-2 hidden-xs'>".$registro["nacionalidad"]."</div>";
                    echo "<div class='col-md-3 col-xs-12'><img width='100px' src='posters/".$registro["poster"]."'/></div>";
                    echo "</div>";

                    // utf8_encode: sirve para imprimir las ñ correctamente
                }
            }

            $consulta = null;
            $resultado = null;
            require "include/cerrar_conexion.php";
        ?>
    </div>
</body>
</html>