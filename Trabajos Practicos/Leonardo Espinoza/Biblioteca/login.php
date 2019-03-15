<?php 
    session_start();

    $usuario= $_POST["usuario"];
    $contraseña= $_POST["contraseña"];
    if($usuario = "Leo" && $contraseña=="1234"){
        $_SESSION['nombreUsuario'] = $usuario;
        header("location: tabla.php");
    }else{
        header("HTTP/1.0 403 ForbiSdden");
    }
?>