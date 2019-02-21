<?php
    $titulo = "Titulo del mail";

    // El mensaje
    $mensaje = "<html><body><h1>Linea 1</h1><br><h2>Linea 2</h2><br><img src='https://www.logaster.com/blog/wp-content/uploads/2013/06/jpg.png'/></body></html>";

    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
    // $mensaje = wordwrap($mensaje, 70, "\r\n");

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: Receptor <receptor@ejemplo.com>, Receptor 2 <receptor2@ejemplo.com>' . "\r\n";
    $cabeceras .= 'From: Emisor <emisor@ejemplo.com>' . "\r\n";
    $cabeceras .= 'Cc: cc@ejemplo.com' . "\r\n";
    $cabeceras .= 'Bcc: bcc@ehemplo.com' . "\r\n";

    // Enviarlo
    mail('emisor@ejemplo.com', $titulo, $mensaje, $cabeceras);
?>