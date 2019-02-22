<?php
   include('includes\session.php');
?>

<html>   
   <head>
      <title>Home </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1> 
      <h2><a href="logout.php">Cerrar sesión</a></h2>
      <br/>      
   </body>   
</html>

<?php 
    echo "SESSION: ";
    echo "</br>";
    var_dump($_SESSION);
    echo "</br>";
    echo "session_name: ".session_name();
    echo "</br>";
    echo "session_id: ".session_id();
?>
