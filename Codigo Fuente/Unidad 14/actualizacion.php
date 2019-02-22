<?php
    require "include/abrir_conexion.php";
?>

<h1>Actualizacion de registros</h1>

<?php    
    try { 
        // Seteamos los parametros
        $calificacion = 6.7;
        $fechaEstreno = "2004-01-25 10:00";
        $id = 1;    

        // Preparo el update y bindeo los parametros
        $update = $conexion->prepare("UPDATE pelicula SET calificacion=?, fecha_estreno = ? WHERE id=?");
        $update->execute(array($calificacion, $fechaEstreno, $id));

        // Cantidad de registros actualizados
        echo "<h2>".$update->rowCount()."</h2>";
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     

    $update = null;
    require "include/cerrar_conexion.php";
?>