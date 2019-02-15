 <?php
    // isset devuelve True si una variable esta definida y no es NULL               
    if (isset($_GET["nombre"])) {
        echo "<h1>Nombre: " . $_GET["nombre"] . "</h1>";
    }

    if (isset($_GET["edad"])) {
        echo "<h2>Edad: " . $_GET["edad"] . "</h2>";
    }

    if (! isset($_GET["apellido"])) {
        echo "El apellido no fue enviado</br>";
    }

    // is_null para saber si una variable es null
    $variableNula = NULL;
    if (is_null($variableNula)) {
        echo "La variable es nula</br>";
    }
    
    // unset es para destruir variables
    $prueba = "Prueba de unset";
    echo $prueba . "</br>";
    unset($prueba);
    echo $prueba . "</br>";

    // defined devuelve True si la constante con ese nombre existe
    const PORCENTAJE_IVA = 21;
    if (defined('PORCENTAJE_IVA')) {
        echo "La constante PORCENTAJE_IVA existe</br>";
    }

    if (! defined('CONSTANTE_NO_DEFINIDA')) {
        echo "La constante CONSTANTE_NO_DEFINIDA no existe</br>";
    }
?>