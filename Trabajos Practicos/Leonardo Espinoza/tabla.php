<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Libros</title>
</head>
<body>
    <?php
        include "conexion.php";
    ?>
    <a href='index.php'> <button type='button' class='boton'>Volver</button></a>
    <h1>Libros</h1>
    <form method="get">
        <strong>Palabra clave:</strong>&nbsp;&nbsp;
        <input type="text" name="termino" required/>&nbsp;&nbsp;
        <input type="submit" value="Buscar"/> 
    </form>
    <br>
    <br>
    <?php
        $sql = "SELECT L.*, G.nombre FROM libros L INNER JOIN generos G ON L.id_genero= G.id";

        if (isset($_REQUEST["termino"])) {
            $termino = $_REQUEST["termino"];
            $sql = "$sql WHERE Titulo LIKE '%$termino%' OR Autor LIKE '%$termino%'";
        }

        // Armo la consulta
        $consulta = $conexion->prepare($sql);//hago un inner para relacionar el id de libros con el nombre de generos
        $consulta->execute();
        $resultado = $consulta->fetchAll();

        echo "<table class=''>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Titulo</th>";
                    echo "<th>Autor</th>";
                    echo "<th>Paginas</th>";
                    echo "<th>Genero</th>";
                    echo "<th>Disponible</th>";
                    echo "<th>Fecha Publicada</th>";
                    echo "<th>Portada</th>";
                    echo "<td><a href='formulario.php'><button type='button' class='boton'>NUEVO</button></a></td>";
            echo "</thead>";
            foreach ($resultado as $registro) {
                //fecha
                $fechaSalida = new DateTime($registro["Fecha_Publicada"]);
                //para imprimir disponible
                $disponible= $registro["Disponible"];
                if($disponible==0)
                    $disponible='No';
                elseif($disponible==1)
                    $disponible='Si';
                echo "<tbody>";
                    echo "<tr>";
                        echo "<td>".utf8_encode($registro['Titulo'])."</td>";
                        echo "<td>".utf8_encode($registro['Autor'])."</td>";
                        echo "<td>".$registro['Paginas']."</td>";
                        echo "<td>".utf8_encode($registro['nombre'])."</td>";
                        echo "<td>".$disponible."</td>";
                        echo "<td>".$fechaSalida->format('d/m/Y')."</td>";
                        echo "<td><img width='50px' src='imagenes/".$registro['Portada']."'/></td>";
                        echo "<td><a href='eliminar.php?id=".$registro['id']."'> <button type='button' class='boton'>Eliminar</button> </a> </td>";
                        echo "<td><a href='formularioDeEdicion.php?id=".$registro['id']."'> <button type='button' class='boton'>Editar</button> </a> </td>";
                    echo "</tr>";
                echo "</tbody>";
            }
        echo "</table>";
    $insert = null;
    require "desconexion.php";
    ?>
</body>
</html>