<?php
    function valorInverso($x) {
        if (!$x) {
            throw new Exception("División por cero");
        }

        return 1 / $x;
    }

    try {
        echo "Valor inverso: ".valorInverso(5);
        echo "</br>";
        echo "Valor inverso: ".valorInverso(0);
        echo "</br>";
    } catch (Exception $exception) {
        echo "Detalles de la Excepcion";
        echo "</br>";
        echo "Mensaje: ".$exception->getMessage();
        echo "</br>";
        echo "File: ".$exception->getFile();
        echo "</br>";
        echo "Line: ".$exception->getLine();        
    }
?>