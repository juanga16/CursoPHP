<?php
    include "include\conexion.php";
    //if (isset($_REQUEST["Salir"])) { $_SESSION = array(); session_destroy();}
        //Seteamos las variables
    try { 
        $id=$_POST['id'];
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $paginas=$_POST['paginas'];
        $id_genero=$_POST['id_genero'];
        if(isset($_POST['disponible'])) $disponible = 1; else $disponible = 0;
        $fecha=$_POST['fecha'];
        //guardar imagen
        $portada = $_FILES["portada"]["name"];
        $tipo  = $_FILES["portada"]["type"]; // nombre de archivo "archivo txt"
        $tamaño  = $_FILES["portada"]["size"];
        $temp  = $_FILES["portada"]["tmp_name"];
        $carpeta="imagenes/".$portada; // establecer la ruta de la carpeta de carga
        $a=FALSE;
        if($tipo=='image/jpg' || $tipo=='image/jpeg' || $tipo=='image/png'){ 
            if(!file_exists($carpeta)){// el archivo de verificación no existe en la ruta de su carpeta de carga
                if($tamaño < 5000000) {// comprueba el tamaño del archivo 5MB
                    move_uploaded_file($temp, 'imagenes/' .$portada); // mover el directorio temporal del archivo de carga a su carpeta de carga
                    $a=TRUE;
                }else{
                    echo "<script type='text/javascript'>alert('Archivo demaciado grande, Tamaño permitido 5MB');</script>";
                }
            }else{ 
                echo "<script type='text/javascript'>alert('El archivo ya existe ... Revisar la carpeta de imágenes');</script>";
            }
        }else{
            echo "<script type='text/javascript'>alert('imagenes JPG , JPEG o PNG Formato de archivo ..... VERIFICAR LA EXTENSIÓN DE ARCHIVOS');</script>";
        }
        //sentencia sql
        if($a){
            $insert = $conexion->prepare("INSERT INTO libros (Titulo, Autor, Paginas, id_genero, Disponible, Fecha_Publicada, Portada) VALUES ('$titulo', '$autor', '$paginas', '$id_genero', '$disponible', '$fecha', '$portada')");
            $insert->bindParam(':fPortada',$portada); // enlazar todo el parámetro
            $insert->execute();
        }else{
            echo "<a href='javascript:history.go(-1)'>Volver Atras</a>";//volver atras para no perder los datos ya cargados en caso de algun error
        }
        $insert = null;
        require "include\desconexion.php";
        header("location: tabla.php");
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     
?>
