<?php
    /*
        print_r vs var_dump
        Estas dos funciones imprimen los detalles de una variable, incluyendo su valor, en un formato legible por el humano. Si es un array o un objeto también imprimen los detalles de cada elemento. Se utilizan frecuentemente durante la depuración de código, situación en la que var_dump suele ser más útil por la mayor información que proporciona. Las diferencias:
        1 - Si el valor de la variable es una cadena de texto, var_dump imprime la cadena entre dobles comillas, print_r no.
        2 - print_r no imprime nada visible para false y cadenas vacías.
        3 - var_dump proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y objetos, de los elementos que la componen. print_r no da información sobre el tamaño de la variable ni sobre el tipo de datos.
    */
    
    $arreglo = array ("LAL" => "Los Angeles Lakers", "BOS" => "Boston Celtics", "NYK" => "New York Knicks", "BKN" => "Brooklyn Nets");
    $entero = 1234;

    echo "print_r";
    echo "</br>";
    print_r ($arreglo);
    echo "</br>";
    print_r ($entero);
    echo "</br>";

    echo "var_dump";
    echo "</br>";
    var_dump ($arreglo);
    echo "</br>";
    var_dump ($entero);
    echo "</br>";    
?>