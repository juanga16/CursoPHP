<?php



   include 'iniciarSesion.php';
   include 'conexion.php';
    if(isset($_GET['idpersona'])) {
      $id = $_GET['idpersona'];
      $sql = "SELECT * FROM persona WHERE idpersona=$id";
      $result = mysqli_query($conexion,$sql);
      $persona=mysqli_fetch_assoc($result);
      $foto=$persona['imagen'];
      $deporte=$persona['idDeporte'];
      $genero=$persona['genero'];
      $masculino=FALSE;
      $femenino=FALSE;
       if($genero=="femenino"){
        $femenino=TRUE;
       }else{
        $masculino=TRUE;
      }
      $socio=$persona['vitalicio'];
      if ($socio==1){
        $Selected=TRUE;
      }else{
        $Selected=FALSE;
      }

    if(!$result) {
      die("Query Failed.");
        }
     }
?>
<!DOCTYPE  html>
<html>
<head>
    <title>Club social </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="p-3 mb-2 bg-success text-white">Editar socio</div><!--boostrap-->
    <form method="post" action="guardarEditado.php" enctype="multipart/form-data" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>>
        <input type='hidden' name='idpersona' value="<?php echo $id?>"><!--oculto-->
        <input type="hidden" name='foto' value="<?php echo $persona['imagen']?>">
        <label for="nombre">Nombre </label>
        <input type="text" required name="nombre" value="<?php echo $persona['nombre'] ?>">
        <label for="apelldio">Apellido</label>
        <input type="text" required name="apellido"  value="<?php echo $persona['apellido'] ?>"><br><br>
        <label for="fecha_nacimiento">Fecha de nacimiento</label>-
        <input type="date" required name="fecha"  value="<?php echo $persona['fecha_nacimiento'] ?>">
        <label for="email">Email</label>
        <input type="email" required name="email"  value="<?php echo $persona['email'] ?>"><br><br>
        <label for="text"> Numero de telefono </label>
        <input type="int" name="telefono" id="" value="<?php echo $persona['telefono']?>"><br><br>
        <label for="genero">Genero</label>
        <input type="radio" name="genero" value="masculino " <?php echo ($masculino ? 'checked' : '') ?>>Masculino
        <input type="radio" name="genero" value="femenino" <?php echo ($femenino ? 'checked' : '') ?>>Femenino <br><br>  
        <label for="deporte">Deporte realizado en la institución  </label>
        <select name="idDep">  <br><br>
        <?php 

                  $sql= "SELECT * FROM  deportes";
                  $result= mysqli_query($conexion,$sql);
                  
                  $num=0;
                  while($mostrar=mysqli_fetch_array($result)){
                  
                    if($deporte==$mostrar['idDeportes']){
                      $selec="selected";
                    }else{
                      $selec="";
                  }
            ?>
                <option value="<?php echo $mostrar['idDeportes'] ?>" <?php echo $selec ?>><?php echo $mostrar['deporte']?></option>

        <?php
               }     
        ?>     
       </select><br><br>
                <label for="socio">¿Es socio vitalicio?</label>
                <input type="checkbox" name="socio" <?php echo ($Selected ? 'checked' : '') ?>> <br><br>
                <label for="imagen">Imagen</label>
                <img width="180px" src="imagen/<?php echo $foto; ?>">
                <input type="file"  name='imagen'  value="<?php echo $persona['imagen'] ?>"><br><br><br>
                <input type="submit" value="continuar"> 
                <br><br><br><br><br><br><br>
    </form>
    <form action="listaDeSocios.php" method="post">
         <button type="submit" class="btn btn-success">cancelar</button>  
    </form>
</body>
</html>