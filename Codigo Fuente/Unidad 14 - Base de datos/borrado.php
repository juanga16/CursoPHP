<?php
    require "include/abrir_conexion.php";
?>

<h1>Borrado de registros</h1>

<?php
    try { 
        // Seteamos los parametros
        $id = 6;

        // Preparo el delete y bindeo los parametros
        $delete = $conexion->prepare("DELETE FROM pelicula WHERE id=?");
        $delete->execute(array($id));

        // Cantidad de registros eliminados
        echo "<h2>".$delete->rowCount()."</h2>";
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     

    $delete = null;
    require "include/cerrar_conexion.php";
?>