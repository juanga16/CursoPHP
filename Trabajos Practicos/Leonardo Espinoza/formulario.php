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
    <form id="formulario" method="POST" name="Formulario" action="guardar.php"> 
        <input type='hidden' name='id'>
        <h2>Registrar Libro</h2></legend>
        <label>Titulo: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="titulo" maxlength="200" autofocus required>
        </br>
        </br>
        <label>Autor: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="autor" maxlength="50" autofocus required>
        </br>
        </br>
        <label>Paginas: &nbsp;</label>
        <input type="number" name="paginas" min="1" max="2000" autofocus required>
        </br>
        </br>
        <label>Genero: &nbsp;</label>
        <select name="id_genero" autofocus><!--Ccombo-->
            <?php
                // Armo la consulta
                $consulta = $conexion->prepare("SELECT * FROM generos ORDER BY nombre");
                $consulta->execute();
                $resultado = $consulta->fetchAll();

                foreach ($resultado as $registro) {
                    echo "<option value='".$registro['id']."'>".utf8_encode($registro['nombre'])."</option>";            
                }
            ?>
        </select>
        </br>
        </br>
        <label>Disponible: &nbsp;</label><!--Checkbox-->
        <input type="checkbox" name="disponible"autofocus><!--cheked para que quede tildado-->
        </br>
        </br>
        <label>Fecha Publicada: &nbsp;</label>
        <input name="fecha" type="date" autofocus required>
        </br>
        </br>
        <label>Portada: &nbsp;</label>
        <input name="portada" type="file" accept="image/jpeg"  autofocus required/>
        </br>
        </br>
        <input class="boton" type="submit" name="Boton" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--con value cambiamos el nombre del boton que por defecto biene en enviar-->
        <a href='tabla.php'> <button type='button' class='boton'>Cancelar</button></a>
    </form>
</body>
</html>