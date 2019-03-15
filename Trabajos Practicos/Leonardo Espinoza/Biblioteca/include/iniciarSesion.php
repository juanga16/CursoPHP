<?php
    /*session_start();
    $varsesion= $_SESSION['usuario']; //solo que lo vea si esta logeado
    if($varsesion ==null || $varsesion= ''){
        header("location: index.php");
        die();
    }*/
    /*if(isset($_POST['Entrar']) || isset($_POST['Salir'])){
        if(isset($_REQUEST['Entrar'])){
            session_start();
            session_destroy();
        }elseif(isset($_REQUEST['Salir'])){
            session_start();
            session_destroy();
        }else{
            header("HTTP/1.0 403 ForbiSdden");
        }
    }else{
        header("HTTP/1.0 403 ForbiSdden");
    }*/
        /*if ($boton == 'Entrar') {
                $_SESSION["Entrar"] = 1;
        }else{
            $_SESSION["Entrar"] = 0;
        }
        if ($_SESSION['Entrar'] == 1) {
            session_start();
        } else {
            header("HTTP/1.0 403 ForbiSdden");
        }
    }else{
        header("HTTP/1.0 403 ForbiSdden");
    }
    if ($boton2 == 'Salir') {
        $_SESSION['Salir'] = session_destroy();
        //$_SESSION = session_unset(); 
    }
?>