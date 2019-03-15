<?php 
    /*$usuario= $_REQUEST["usuario"];
    $contraseña = $_REQUEST["contraseña"];
    if($usuario = "Leo" && $contraseña=="1234"){
        header("location: tabla.php");
    }else{
        header("HTTP/1.0 403 ForbiSdden");
    }
    session_start();
    $_SESSION['usuario']=$usuario;
    $_SESSION['contraseña']=$contraseña;*/
    if(isset($_POST['Entrar'])){
        session_start();
        $usuario= $_REQUEST["usuario"];
        $contraseña = $_REQUEST["contraseña"];
        $boton = $_REQUEST["Entrar"];
        if ($boton == 'Entrar') {
            if ($contraseña=='1234' && $usuario=='Leo') {
                $_SESSION["Entrar"] = 1;
                $contraseña=='';
                $contraseña=='';
            }else{
                $_SESSION["Entrar"] = 0;
            }
        }else {
            header("HTTP/1.0 403 ForbiSdden");
        }
        if ($_SESSION['Entrar'] == 1) {
            include "tabla.php";
        } else {
            header("HTTP/1.0 403 ForbiSdden");
        }
    }else{
        header("HTTP/1.0 403 ForbiSdden");
    }

    
    /*session_start();
$contraseña = $_REQUEST["contraseña"];
$boton = $_REQUEST["Entrar"];
if ($boton == 'Salir') { $_SESSION = array(); session_destroy();}
if ($boton == 'Entrar') {
    if ($contraseña=='1234') {
        $_SESSION["Entrar"] = 1;
        $contraseña='';
    } else {
        $mensaje_error = '<br> Error de Entrar!<br> Ingrese nuevamente usuario/clave';}
}
if ($_SESSION["Entrar"] == 1) {
    require "tabla.php";
} else {
    require "index.php";
}*/
?>