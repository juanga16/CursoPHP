<?php
	include "conexion.php";
	try { 
		
        // Seteamos los parametros
        
        $id=$_GET['id'];

        // Preparo el delete y bindeo los parametros
        $delete = $conexion->prepare("DELETE FROM libros WHERE id=?");
        $delete->execute(array($id));

        // Cantidad de registros eliminados
        echo "<h2>".$delete->rowCount()."</h2>";
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     

    $delete = null;
    require "desconexion.php";
?>
