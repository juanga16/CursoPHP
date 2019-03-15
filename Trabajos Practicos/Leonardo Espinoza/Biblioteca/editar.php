<?php
	include "include\conexion.php";
	//Seteamos las variables
try { 
    $id=$_REQUEST['id'];
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $paginas=$_POST['paginas'];
    $id_genero=$_POST['id_genero'];
    if(isset($_POST['disponible'])) $disponible = 1; else $disponible = 0;
	$fecha=$_POST['fecha'];
	//imagen
    $select = $conexion->prepare('SELECT * FROM libros WHERE id =:id'); 
    $select->bindParam(':id',$id);
    $select->execute(); 
    $row = $select->fetch(PDO::FETCH_ASSOC);
    extract($row);
	$portada = $_FILES["portada"]["name"];
	$tipo  = $_FILES["portada"]["type"]; // nombre de archivo "Ej: archivo txt"
	$tamaño  = $_FILES["portada"]["size"];
	$temp  = $_FILES["portada"]["tmp_name"];
	$carpeta="imagenes/".$portada; // establecer la ruta de la carpeta de carga
	$directorio="imagenes/";// establecer la ruta de la carpeta de carga para el tiempo de actualización eliminar el archivo anterior y cargar el nuevo archivo para el siguiente uso
    $validacionImagen=FALSE;
    
    if ($portada == "") {
        $validacionImagen=TRUE;
    } else {
        if($tipo=='image/jpg' || $tipo=='image/jpeg' || $tipo=='image/png'){ 
            if(!file_exists($carpeta)){// el archivo de verificación no existe en la ruta de su carpeta de carga
                if($tamaño < 5000000) {// comprueba el tamaño del archivo 5MB
                    move_uploaded_file($temp, 'imagenes/' .$portada); // mover el directorio temporal del archivo de carga a su carpeta de carga
                    unlink($directorio.$row['Portada']); // función de desvinculación eliminar archivo anterior
                    $validacionImagen=TRUE;
                }else{
                    echo "<script type='text/javascript'>alert('Archivo demaciado grande, Tamaño permitido 5MB');</script>";
                }
            }else{ 
                echo "<script type='text/javascript'>alert('El archivo ya existe ... Revisar la carpeta de imágenes');</script>";
            }
        }
    }
        //sentencia sql
        if($validacionImagen){
            $sentenciaSql = "UPDATE libros SET Titulo='$titulo', Paginas='$paginas', Autor = '$autor', id_genero='$id_genero', Disponible='$disponible', Fecha_Publicada='$fecha'";

            if ($portada != "") {
                $sentenciaSql = $sentenciaSql.", Portada='$portada'";
            }

            $sentenciaSql = $sentenciaSql." WHERE id='$id'";

            $update = $conexion->prepare($sentenciaSql);
                        
            $update->execute();
            $update = null;
            require "include\desconexion.php";

            echo "<h1>$sentenciaSql</h1>";
            header("location: tabla.php");
        }else{
            echo "<a href='javascript:history.go(-1)'>Volver Atras</a>";//volver atras para no perder los datos ya cargados en caso de algun error
        }
} catch( PDOExecption $excepcion) { 
	echo "<h2>Error: $excepcion->getMessage()</h2>";
}     
?>