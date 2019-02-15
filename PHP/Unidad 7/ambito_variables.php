<?php
    $variable = "Variable global";
    
    function funcionVariableGlobalOpcion1()
    {
        // Al usar la palabra global puedo utilizar la variable declarada afuera
        global $variable;
        echo $variable;
        echo "</br>";
    }

    function funcionVariableGlobalOpcion2()
    {
        // Puedo acceder a la variable a traves del array GLOBALS
        echo $GLOBALS['variable'];
        echo "</br>";
    }

    function funcionVariableLocal()
    {
        // En este caso se define una nueva $variable dentro del scope de la funcion
        $variable = "Variable local";
        echo $variable;
        echo "</br>";
    }

    function funcionVariableStatic()
    {
        // Los valores de las variables static se mantienen en el tiempo
        static $indice = 0;
        $indice++;

        echo $indice;
        echo "</br>";
    }

    funcionVariableGlobalOpcion1();
    funcionVariableGlobalOpcion2();
    funcionVariableLocal();
    funcionVariableStatic();
    funcionVariableStatic();
    funcionVariableStatic();
?>