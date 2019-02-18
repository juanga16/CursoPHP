<h2>Contenido del archivo:</h2>

<?php
    $nombreArchivo = "archivo.txt";

    if (file_exists($nombreArchivo)) {
        $líneas = file($nombreArchivo);

        // Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
        foreach ($líneas as $numeroLinea => $linea) {
            echo "Línea #<b>{$numeroLinea}</b> : " . htmlspecialchars($linea) . "<br />";
        }
    }
?>