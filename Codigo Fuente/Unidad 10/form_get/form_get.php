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

    $idTipoDeNoticia = 0;
    $tiposDeNoticias = array(1 => "Economia", 2 => "Politica", 3 => "Sociedad", 4 => "Deportes", 5 => "Espectaculos", 6 => "Tecnologia", 7 => "Mundo", 8 => "Arquitectura");
    $termino = "";    

    // isset se fija si existe una clave 'idTipoDeNoticia' en el array $_GET
    if (isset($_GET["idTipoDeNoticia"])) {
        // Lo convierto a entero anteponiendo (int)
        $idTipoDeNoticia = (int) $_GET["idTipoDeNoticia"];     
    }

    // isset se fija si existe una clave 'termino' en el array $_GET
    if (isset($_GET["termino"])) {
        $termino = $_GET["termino"];
    }
?>

<html>
<body>
    <!-- PHP_SELF le decimos que postee el formulario a si mismo -->
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Tipo de Noticia</label>
        </br>

        <select name="idTipoDeNoticia" required>
            <option value=""></option>
            <?php
                foreach ($tiposDeNoticias as $clave => $valor) {
                    /*  esto se conoce como iif, es lo mismo que
                        if ($clave == $idTipoDeNoticia) {
                            $seleccionado = "selected"
                        } else {}
                            $seleccionado = ""
                        }
                    */

                    $seleccionado = ($clave == $idTipoDeNoticia ? "selected" : "");
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
            if ($idTipoDeNoticia > 0) {
                echo "<h1>Tipo de Noticia: $tiposDeNoticias[$idTipoDeNoticia]</h1>";
            }

            if (! empty($termino)) {
                echo "<h1>Termino: $termino</h1>";
            }
        ?>
    </form>
</body>
</html>