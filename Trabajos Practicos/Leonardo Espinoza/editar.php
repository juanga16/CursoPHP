<?php
	include 'conexion.php';
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

	//$editar="UPDATE libros SET Titulo='$titulo', Paginas='$paginas', Autor = '$autor', id_enero='$id_genero', Disponible='$disponible', Fecha_Publicada='$fecha', Portada='$portada' WHERE Id='$id'";
	$update = $conexion->prepare("UPDATE libros SET Titulo='$titulo', Paginas='$paginas', Autor = '$autor', id_enero='$id_genero', Disponible='$disponible', Fecha_Publicada='$fecha', Portada='$portada' WHERE Id='$id'");
	$update->execute();
    $resultado = $update->fetchAll();

	} catch( PDOExecption $excepcion) { 
		echo "<h2>Error: $excepcion->getMessage()</h2>";
	}     

$update = null;
require "desconexion.php";
?>
<script type="text/javascript">//eliminar con cartel de alert y volver al index
	alert("Registro Guardado");
	window.location.href='tabla.php';
</script>
