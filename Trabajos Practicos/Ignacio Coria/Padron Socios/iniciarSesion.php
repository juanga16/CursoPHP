<?php
session_start();
 $varsesion= $_SESSION['usuario']; //solo que lo vea si esta logeado
 if($varsesion ==null || $varsesion= ''){
     header("location: index.php");
     die();
 }
 
 ?>