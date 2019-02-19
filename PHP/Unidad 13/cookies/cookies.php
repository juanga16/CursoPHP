<?php
    /*
    Las cookies son pequeños archivos que algunos sitios web guardan en tu maquina.
    Las cookies almacenan información sobre tí, como nombre de usuario o información de registro, o preferencias de usuario, pero no espían, como el spyware. 
    Si tienes una cookie de un sitio web al que vas a menudo, la cookie recuerda cosas que harán tu próxima visita a esa página un poco más fácil, 
    e incluso hace que las páginas se carguen un poco más rápido.
    Es bueno borrar tus cookies de vez en cuando, porque aunque algunas caducan y se eliminan solas tras un cierto periodo de tiempo predeterminado, 
    otras no caducan y si no las borras se quedan en tu maquina ocupando espacio.
    */

    $nombre = "TestCookie";
    $valor = time();
    $tiempoExpiracion = time() + 60; /* Expira en un minuto */
    $subCarpeta = "/"; // Path en donde va a estar disponible la cookie
    $dominio = "testcookie.com";
    $seguro = FALSE; // Si es TRUE significa que la Cookie solo se creara si existe una conexion segura (HTTPS)

    // Seteamos el valor de la cookie
    setcookie($nombre, $valor, $tiempoExpiracion);
    // setcookie($nombre, $valor, $tiempoExpiracion, $subCarpeta, $dominio, $seguro);
    
    // Imprimir una cookie individual
    echo "Valor de la cookie: $_COOKIE[$nombre]";
    echo "</br>";

    //Otra manera de depurar/probar es viendo todas las cookies
    echo var_dump($_COOKIE);
?>