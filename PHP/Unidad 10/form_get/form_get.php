<?php
    function leerEntrada($parametro) {
        // trim: recorta los spacios a los costados
        $parametro = trim($parametro);
        // stripslashes: saca las barras invertidas
        $parametro = stripslashes($parametro);
        // htmlspecialchars: convierte caracteres especiales a HTML, se usa para prevenir inyeccion de codigo
        $parametro = htmlspecialchars($parametro);

        return $parametro;
    }

    $tipoDeNoticiaSeleccionada = "";
    $tiposDeNoticias = array(1 => "Economia", 2 => "Politica", 3 => "Sociedad", 4 => "Deportes");
    $termino = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["tipoDeNoticia"])) {
            $tipoDeNoticiaSeleccionada = leerEntrada($_GET["tipoDeNoticia"]);
        }

        if (isset($_GET["termino"])) {
            $termino = leerEntrada($_GET["termino"]);
        }    
    }
?>

<html>
<body>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Tipo de Noticia</label>
        </br>

        <select name="tipoDeNoticia" required>
            <option value=""></option>
            <?php
                foreach ($tiposDeNoticias as $clave => $valor) {
                    $seleccionado = ($clave == $tipoDeNoticiaSeleccionada ? "selected" : "");
                    echo "<option value='$clave' $seleccionado>$valor</option>";            
                }            
            ?>
        </select>
        </br>
        <label>Termino</label>
        </br>
        <input type="text" name="termino" required value="<?php echo $termino ?>">
        </br>
        <input type="submit" value="Buscar">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                echo "<h3>Tipo de Noticia: $tiposDeNoticias[$tipoDeNoticiaSeleccionada]</h3>";
                echo "<h3>Termino: $termino</h3>";        
            }
        ?>
    </form>
</body>
</html>