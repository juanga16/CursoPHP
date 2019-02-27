<?php

    include "conexion.php";
    //Seteamos las variables
try { 
    $id=$_POST['id'];
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $paginas=$_POST['paginas'];
    $id_genero=$_POST['id_genero'];
    if(isset($_POST['disponible'])) $disponible = 1; else $disponible = 0;
    $fecha=$_POST['fecha'];
    $portada=$_POST['portada'];
    //sentencia sql
    $insert = $conexion->prepare("INSERT INTO libros (Titulo, Autor, Paginas, id_genero, Disponible, Fecha_Publicada, Portada) VALUES ('$titulo', '$autor', '$paginas', '$id_genero', '$disponible', '$fecha', '$portada')");
    $insert->execute();
    $resultado = $insert->fetchAll();

    } catch( PDOExecption $excepcion) { 
    echo "<h2>Error: $excepcion->getMessage()</h2>";
}     

$insert = null;
require "desconexion.php";

?>
<script type="text/javascript">//eliminar con cartel de alert y volver al index
	alert("Registro eliminado");
	window.location.href='tabla.php';
</script>


 