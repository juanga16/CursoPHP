<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Libros</title>
</head>
<body>
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
        include "include\session.php";
        include "include\conexion.php";
    ?>
    <a href='index.php'> <button type='button' class='btn btn-secondary'>Volver</button></a>
    <blockquote class="blockquote text-center">
        <h1>Lista de Libros</h1>
    </blockquote>
    <form class="form-inline" >
        <div class="form-group mx-sm-3 mb-2"> 
        <label for="inputPassword2" class="sr-only">Buscador2</label>
        <h3><strong>Buscar por:</strong></h3>&nbsp;&nbsp;
        <input type="text" name="termino" class="form-control" id="inputPassword2" placeholder="Titulo o Autor">&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <br>
    <br>
    <?php
        // Armo la consulta
        $sql = "SELECT L.*, G.nombre FROM libros L INNER JOIN generos G ON L.id_genero= G.id";
        if (isset($_REQUEST["termino"])) {
            $termino = $_REQUEST["termino"];
            $sql = "$sql WHERE Titulo LIKE '%$termino%' OR Autor LIKE '%$termino%'";
        }
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();

        echo "<table class='table'>";
            echo "<thead class='thead-dark'>";
                echo "<tr>";
                    echo "<th scope='col'>Titulo</th>";
                    echo "<th scope='col'>Autor</th>";
                    echo "<th scope='col'>Paginas</th>";
                    echo "<th scope='col'>Genero</th>";
                    echo "<th scope='col'>Disponible</th>";
                    echo "<th scope='col'>Fecha Publicada</th>";
                    echo "<th scope='col'>Portada</th>";
                    echo "<td scope='col'><a href='formulario.php'><button type='button' class='btn btn-success'>NUEVO</button></a></td>";
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
                echo "<thead class='thead-light' >";
                    echo "<tr>";
                        echo "<td scope='col'>".$registro['Titulo']."</td>";
                        echo "<td scope='col'>".$registro['Autor']."</td>";
                        echo "<td scope='col'>".$registro['Paginas']."</td>";
                        echo "<td scope='col'>".$registro['nombre']."</td>";
                        echo "<td scope='col'>".$disponible."</td>";
                        echo "<td scope='col'>".$fechaSalida->format('d/m/Y')."</td>";
                        echo "<td scope='col'><img width='50px' src='imagenes/".$registro['Portada']."'/></td>";
                        echo "<td scope='col'><a href='eliminar.php?id=".$registro['id']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a> </td>";
                        echo "<td scope='col'><a href='formularioDeEdicion.php?id=".$registro['id']."'> <button type='button' class='btn btn-warning'>Editar</button> </a> </td>";
                    echo "</tr>";
                echo "</thead>";
            }
        echo "</table>";
    $consulta = null;
    require "include\desconexion.php";
    ?>
</body>
</html>