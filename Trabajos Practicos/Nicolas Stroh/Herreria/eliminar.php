<?php
include('db.php');
include('includes\session.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $archivo="";
  //consulto el nombre de la imagen
  $query = "SELECT * FROM trabajos WHERE id = $id";
  $resultado = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($resultado);

  $archivo=$row['foto'];
  $archivo="imagenes/".$archivo;

  //elimino la foto del directorio
  unlink($archivo);
 
  //elimino en la tabla
  $query = "DELETE FROM trabajos WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Se elimino con éxito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>