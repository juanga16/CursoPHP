<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>Club -pagina oficial</title>
</head>
<body>
<?php
  include("conexion.php"); 

    if(isset($_GET['idpersona'])) {
      $id = $_GET['idpersona'];
      $foto=$_GET['foto'];
      $archivo="imagen/".$foto;
      unlink($archivo); //elimino la foto de carpeta
      $query = "DELETE FROM persona WHERE idpersona = $id";
      $result = mysqli_query($conexion, $query);
    
    if(!$result) {
      die("Query Failed.");
    }
     header('Location: listaDeSocios.php');
    }
     mysqli_close($conexion); 
?>
</html>