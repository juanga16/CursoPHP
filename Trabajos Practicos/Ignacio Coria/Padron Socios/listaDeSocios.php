<!DOCTYPE  html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!--boostrap-->
    <title>Datos de socios  </title>
</head>
<body>
<p class="text-white bg-dark">Lista de socios</p>
 <?php
    include 'iniciarSesion.php';
    include 'conexion.php';
    include 'calcularEdad.php';   
?>
<form action="" method="POST">
    <input type="text" name="buscar">
    <input type="submit" value="buscar" >
<?php
  $sql = "SELECT p.*,d.deporte FROM persona p INNER JOIN deportes d on p.idDeporte=d.idDeportes ";
    if(isset($_REQUEST['buscar'])){
        $buscar=$_REQUEST['buscar'];
        $sql="$sql WHERE nombre LIKE '%$buscar%'  or apellido LIKE '%$buscar%'";
    }
    $result=mysqli_query($conexion,$sql);
?>
    <table class="table" >
    <thead class="thead-dark">
        <tr>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Fecha de nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Genero</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col" >Deporte</th>
            <th scope="col">Socio vitalicio</th>
            <th scope="col">Foto </th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>            
		</tr>
    </thead>
<?php
   while($row = mysqli_fetch_array($result)){
    $socio=$row['vitalicio'];
        if($socio==0){
        $socio='No';
        }else{
        $socio='Si';
                     }
 ?>
    <tbody>
		<tr>      
			<td><?php echo $row['nombre'];?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['fecha_nacimiento'];?></td>
            <td><?php echo edad($row['fecha_nacimiento']);?></td>
            <td><?php echo $row['genero'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['deporte'];?></td>
            <td><?php echo $socio;?></td>
            <td><img src=<?php echo "imagen/".$row['imagen'];?> height="60" width="60"></td>
            <td><button type="button" class="btn btn-outline-success"><a href="editar.php?idpersona=<?php echo $row['idpersona'];?>">Editar</a></button></td><!--boostrap-->            
            <td><button type="button" class="btn btn-outline-danger"><a href="eliminar.php?idpersona=<?php echo $row['idpersona'];?>&foto=<?php echo $row['imagen'];?>">Eliminar</a></button></td>             
        </tr>
    </tbody>
<?php
   }
   mysqli_close($conexion);
?>
    </form> 
    </table><br><br>
    <form action="nuevoSocio.php">
            <input type="submit" value="nuevo socio "> <br><br>
     </form>
     <form action="cerrarSesion.php">
         <input type="submit" value="cerrar sesion" >      
     </form>
</body>
</html>