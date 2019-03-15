<?php
        include "include\session.php";
?>

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
    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
        include "include\conexion.php";
    ?>
    <form id="formulario" method="POST" name="Formulario" enctype='multipart/form-data' action="guardar.php"> 
        <input type='hidden' name='id'>
        <h2>Registrar Libro</h2></legend>
        <label><b>Titulo: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="titulo" maxlength="200" autofocus required>
        </br>
        </br>
        <label>Autor: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="autor" maxlength="50" autofocus required>
        </br>
        </br>
        <label>Paginas: &nbsp;</label>
        <input type="number" name="paginas" min="1" max="10000" autofocus required>
        </br>
        </br>
        <label>Genero: &nbsp;</label>
        <select name="id_genero" autofocus><!--Ccombo-->
            <?php
                // Armo la consulta
                $consulta = $conexion->prepare("SELECT * FROM generos ORDER BY nombre");
                $consulta->execute();
                $resultado = $consulta->fetchAll();
                //recorro
                foreach ($resultado as $registro) {
                    echo "<option value='".$registro['id']."'>".$registro['nombre']."</option>";            
                }
            ?>
        </select>
        </br>
        </br>
        <label>Disponible: &nbsp;</label>
        <input type="checkbox" name="disponible"autofocus><!--Checkbox-->
        </br>
        </br>
        <label>Fecha Publicada: &nbsp;</label>
        <input name="fecha" type="date" autofocus required>
        </br>
        </br>
        <label>Portada: </b>&nbsp;</label>
        <input name="portada" type="file" accept="image/*" autofocus required/>
        </br>
        </br>
        <input class="btn btn-primary" type="submit" name="Boton" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--con value cambiamos el nombre del boton que por defecto biene en enviar-->
        <a href='tabla.php'> <button type='button' class='btn btn-secondary'>Cancelar</button></a>
    </form>
</body>
</html>