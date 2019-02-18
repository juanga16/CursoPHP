<?php
    // Abro el archivo. 'a' es para abrir como escritura y agregar contenido al final
    // Mas referencia ver: http://php.net/manual/es/function.fopen.php
    $archivo = fopen("nuevo_archivo.txt", "a");
    
    $contenido = "Fecha: ".date('l jS \of F Y h:i:s A').PHP_EOL;
    fwrite($archivo, $contenido);    
    
    fclose($archivo);
?>