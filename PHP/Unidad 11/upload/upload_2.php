<?php
    if(isset($_POST["submit"])) {
        // Carpeta en donde voy a subir los archivos
        $directorio = "archivos/";

        // Concateno la carpeta y el nombre del archivo
        $archivo = $directorio . basename($_FILES["imagenParaSubir"]["name"]);
    
        // Obtengo el tipo de archivo
        $tipoDeArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        
        // Obtiene la informacion de la imagen
        $informacionImagen = getimagesize($_FILES["imagenParaSubir"]["tmp_name"]);
        
        $archivoValido = TRUE;

        // Si es verdadero, es una imagen
        if($informacionImagen) {
            echo "<h2>Nombre del archivo: ".$_FILES['imagenParaSubir']['name']."</h2>";
            echo "<h2>Tipo de archivo: ".$_FILES['imagenParaSubir']['type']."</h2>";
            echo "<h2>Ubicación temporal: ".$_FILES['imagenParaSubir']['tmp_name']."</h2>";
            echo "<h2>Tamaño en bytes: ".$_FILES['imagenParaSubir']['size']."</h2>";
            echo "<h2>Ancho en pixeles: ".$informacionImagen['0']."</h2>";
            echo "<h2>Alto en pixeles: ".$informacionImagen['1']."</h2>";
        } else {
            echo "<h2>El archivo no es una imagen</h2>";
            $archivoValido = FALSE;
        }

        // Controlamos si el archivo ya existe
        if ($archivoValido && file_exists($archivo)) {
            echo "<h2>El archivo ya existe</h2>";
            $archivoValido = FALSE;
        }

        // Controlamos el tamañano en bytes. 524288 es el maximo (512 kb. 512 * 1024)
        if ($archivoValido && ($_FILES["imagenParaSubir"]["size"] > 524288)) {
            echo "<h2>El archivo es muy grande</h2>";
            $archivoValido = FALSE;
        }

        // Controlamos la extensión del archivo
        if ($archivoValido && ($tipoDeArchivo != "jpg" && $tipoDeArchivo != "png" && $tipoDeArchivo != "jpeg" && $tipoDeArchivo != "gif")) {
            echo "<h2>Solamente archivos JPG, JPEG, PNG & GIF son permitidos</h2>";
            $archivoValido = FALSE;
        }

        if ($archivoValido) {
            if (move_uploaded_file($_FILES["imagenParaSubir"]["tmp_name"], $archivo)) {
                echo "<h2>El archivo ha sido subido</h2>";
                echo "<img src='$archivo'/>";
            } else {
                echo "<h2>Ocurrio un error al subir el archivo</h2>";
            }
        } else {
            echo "<h2>El archivo no fue subido</h2>";
        }
    }
?>