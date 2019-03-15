<?php
    /*session_unset();//Libera todas las variables de sesión
    session_destroy(); //destruir sesion
    //header("location: index.php");*/
    //session_start();
    //if(isset($_SESSION['Entrar'])){
        //if(!$_SESSION['usuario'] || !$_SESSION["contraseña"]){
            session_start();
            $_SESSION= array();
            //session_unset();//Libera todas las variables de sesión
            session_destroy(); //destruir sesion

            //header("location: index.php");
        //}
    //}else{
       // header("HTTP/1.0 403 ForbiSdden");
    //}



    /*session_start();
   
   // Si no fue seteado el nombre del usuario
   if(! isset($_SESSION['nombreUsuario'])){
      header("location: login.php");*/
?>