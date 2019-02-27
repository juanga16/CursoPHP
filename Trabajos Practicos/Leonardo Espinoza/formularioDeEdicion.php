<?php
  include 'conexion.php';

try {
        /*$id=$_GET['id'];
        $stmt = $conexion->prepare("SELECT *  FROM libros WHERE id = $id");
        $stmt->execute(['id'=>$id]);
        $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
        //
        if (isset($_GET['id'])) {
            $sql = 'SELECT * FROM libros WHERE id = ?';
            $stmt = $conexion->prepare($sql);
            $results = $stmt->execute(array($_GET['id']));
            $row = $stmt->fetch();
            if (empty($row)) {
                $result = "No se encontraron resultados !!";
            }
        }
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
}     

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Editar</title>
</head>
<body>
    <form method="POST" name="Formulario" action="editar.php"> 
        <input type="hidden" name="id" value="<?php echo $row['id'];?> ">  
        <h2>Editar Libro</h2></legend>
        <label>Titulo: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="titulo"  maxlength="200" autofocus required value="<?php echo $row['Titulo'];?> ">
        </br>
        </br>
        <label>Autor: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="text" name="autor" maxlength="50" autofocus requiered value="<?php echo $row['Autor']?> ">
        </br>
        </br>
        <label>Paginas: &nbsp;</label>
        <input type="number" name="paginas" min="1" max="2000" autofocus requiered value="<?php echo $row['Paginas']?>" autofocus required>
        </br>
        </br>
        <label>Genero: &nbsp;</label>
        <select name="id_genero" autofocus value="<?php echo $row['id_genero']?> "><!--Ccombo-->
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
        <label>Disponible: &nbsp;</label><!--Checkbox--><!--probar el agregado de ? 'checked':''-->
            <input type="checkbox" name="disponible" autofocus <?php echo ($row['Disponible'] ? 'checked':'') ?>><!--cheked para que quede tildado-->
        </br>
        </br>
        <?php 
            $fechaPublicacion = new DateTime($row["Fecha_Publicada"]);
        ?>
        <label>Fecha Publicada: &nbsp;</label>
        <input name="fecha" type="date" autofocus required value="<?php echo $fechaPublicacion->format('Y-m-d')?>">
        </br>
        </br>
        <label>Portada: &nbsp;</label>
        <input name="portada" type="file" accept="image/jpeg"  autofocus required value="<?php echo $row['Portada']?> "/>
        </br>
        </br>
        <input class="boton" type="submit" name="Boton" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--con value cambiamos el nombre del boton que por defecto biene en enviar-->
        <a href='tabla.php'> <button type='button' class='boton'>Cancelar</button></a>
    </form>
</body>
</html>