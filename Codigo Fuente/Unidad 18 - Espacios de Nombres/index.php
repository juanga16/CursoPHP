<?php
    include "include/namespace.php";

    // Instancio una clase declarada en un namespace
    $persona = new miNamespace\Persona();
    $persona->setNombre("Juan");

    echo "<h1>".$persona->getNombre()."</h1>";

    // Utilizo la funcion trim definida en el namespace
    echo miNamespace\trim($persona->getNombre());
    echo "<br>";
    // Utilizo la funcion global
    echo \trim($persona->getNombre());
?>