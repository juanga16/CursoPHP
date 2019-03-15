<?php
	include "include\conexion.php";
	try { 
        if(isset($_REQUEST['id'])){
            // Seteamos los parametros
            $id=$_REQUEST['id'];// obtener id y almacenar en $ id variable
            $select= $conexion->prepare('SELECT * FROM libros WHERE id =:id'); 
            $select->bindParam(':id',$id);
            $select->execute();
            $row=$select->fetch(PDO::FETCH_ASSOC);
            unlink("imagenes/".$row['Portada']); // la función de desvinculación elimina permanentemente tu archivo
            // borrar un registro original de db
            $delete = $conexion->prepare('DELETE FROM libros WHERE id =:id');
            $delete->bindParam(':id',$id);
            $delete->execute();
        }
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     
    $delete = null;
    require "include\desconexion.php";
    header("location: tabla.php");
?>