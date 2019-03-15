<?php
     $usuario= $_POST['usuario'];
     $clave=$_POST['clave'];  
     include 'conexion.php';
     
$sql= "SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave' "; 
$resultado= mysqli_query($conexion,$sql); //ejecuto consulta y lo guardo en la variable resultados
$filas= mysqli_num_rows($resultado);//si coincide muestra el resultado 

   if($filas>0){ //si hay un dato 
    header("location:listaDeSocios.php");
    }else{
    echo "<h1>USUARIO INCORRECTO O NO REGISTRADO <br><br><br><br><h1>";
    }
mysqli_free_result($resultado); //liberar espacio 
mysqli_close($conexion);

session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['clave']=$clave;
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!--boostrap-->
</head>
<body>
     <form action="index.php" method="post">
     <button type="submit" class="btn btn-primary">Volver</button>
     </form>
</body>
</html>