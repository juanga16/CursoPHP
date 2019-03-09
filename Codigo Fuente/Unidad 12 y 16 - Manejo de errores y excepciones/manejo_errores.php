<?php
    function valorInverso($x) {
        // si es cero, lanzo la excepcion porque no es posible la division por cero
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
        // Para obtener el mensaje detallado del error
        echo "Mensaje: ".$exception->getMessage();
        echo "</br>";
        // En que archivo ocurrio
        echo "File: ".$exception->getFile();
        echo "</br>";
        // En que linea
        echo "Line: ".$exception->getLine();
        echo "</br>";
        // Si lo tuviera, el codigo del error (es un numero)
        echo "Codigo: ".$exception->getCode();
        echo "</br>";
        // En el caso que hubieran excepciones encadenadas
        echo "Previous: ".$exception->getPrevious(); 
    }
?>