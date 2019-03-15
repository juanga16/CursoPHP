<?php
   session_start();
   
   // Si no fue seteado el nombre del usuario
   if(! isset($_SESSION['nombreUsuario'])){
      header("location: index.php");
   }
?>