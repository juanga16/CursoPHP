<?php
    $nombreArchivo = "archivo.txt";

    if (file_exists($nombreArchivo)) {
        // Para Descargar el archivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($nombreArchivo).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($nombreArchivo));
    }
?>