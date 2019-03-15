<!DOCTYPE  html>
<html>

<head>
    <title>Club social </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!--boostrap-->

</head>

<body>
<div class="p-3 mb-2 bg-primary text-white">Nuevo socio</div><!--boostrap-->
<?php
include 'iniciarSesion.php';
include 'conexion.php';
?>
<form action="guardarSocio.php" method="post" enctype="multipart/form-data" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>>
        <label for="nombre">Nombre </label>
        <input type="text"  name="nombre"required>
        <label for="apellido">Apellido </label>
        <input type="text" name="apellido" required><br><br>
        <label for="text">Fecha de nacimiento</label> 
        <input type="date" name="fecha" min="1909-01-01" required> <br><br>  
        <label for="mail"> Email</label>
        <input type="email" name="email"placeholder="socio@gmail.com" required>
        <label for="text"> Numero de telefono </label>
        <input type="int" name="telefono" id="" required><br><br>
        <label for="genero">Genero</label>
        <input type="radio" name="genero" value="masculino " checked>Masculino
        <input type="radio" name="genero" value="femenino">Femenino <br><br>  
        <label for="deporte">Deporte realizado en la institución </label>
        <select name="idDep">
        <?php 
                  $sql= "SELECT * FROM  deportes";
                  $result= mysqli_query($conexion,$sql);
              
                  while($mostrar=mysqli_fetch_array($result)){
            ?>
                <option value="<?php echo $mostrar['idDeportes']?>"><?php echo $mostrar['deporte']?></option>
        <?php
                  }     
        ?>  
       </select> <br><br>   
                <label for="socio">¿Es socio vitalicio?</label>
                <input type="checkbox" name="socio"> <br><br>
                <label for="imagen">foto de perfil</label>
                <input type="file" name="imagen" required> <br><br>
                <input type="submit" value="continuar">      
    </form>
        <br><br><br><br>
 <form action="listaDeSocios.php" method="post">
        <button type="submit" class="btn btn-primary">cancelar</button>  
 </form>
  
    </body>
    </html>