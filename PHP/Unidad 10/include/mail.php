<?php
    $titulo = "Titulo del mail";

    // El mensaje
    $mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
    // $mensaje = wordwrap($mensaje, 70, "\r\n");

    $cabeceras = 'From: juan.desposito@gmail.com' . "\r\n" .
            'Reply-To: juan.desposito@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    // Enviarlo
    mail('juan.desposito@gmail.com', $titulo, $mensaje, $cabeceras);
?>