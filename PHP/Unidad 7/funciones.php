<?php
    // La funcion tiene que ser declarada antes de ser utilizada
    function multiplicacionPorDos($parametro)
    {
        echo "El valor del parametro es: " . $parametro;
        echo "</br>";
        
        return $parametro * 2;
    }

    // La funcion tiene el parametro $valor2 que tiene un valor por defecto
    function multiplicarValores($valor1, $valor2 = 5)
    {
        return $valor1 * $valor2;
    }

    // La funcion tiene un parametro por referencia es decir, el parametro es modificado dentro de la funcion y mantiene el nuevo valor.
    // Se agrega el umpersand antes del $ del parametro
    function parametroPorReferencia(&$parametroPorReferencia)
    {
        $parametroPorReferencia = $parametroPorReferencia . " Y el segundo es salir campeón";
    }

    $valorParametro = 10;
    $resultadoFuncion = multiplicacionPorDos($valorParametro);

    echo "El resultado de la funcion es: " . $resultadoFuncion;
    echo "</br>";

    echo "Invoco a la funcion con dos parametros " . multiplicarValores(8, 10);
    echo "</br>";
    echo "Invoco a la funcion solo con el parametro obligatorio " . multiplicarValores(20);
    echo "</br>";

    $cadena = "Mis sueños son dos. Mi primer sueño es jugar en el Mundial.";
    parametroPorReferencia($cadena);
    echo $cadena;
    echo "</br>";
    
    
?>