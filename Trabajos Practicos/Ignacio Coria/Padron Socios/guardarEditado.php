<?php
  include 'conexion.php';
  include 'calcularEdad.php';
    $idPersona=$_POST["idpersona"];
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $fecha= $_POST["fecha"];
    $edad= edad($fecha);
    $genero= $_POST["genero"];
    $email= $_POST["email"];
    $telefono= $_POST["telefono"];
    $idDeporte= $_POST["idDep"];
    $foto=$_POST['foto'];

    if(isset($_POST['socio'])){
       $vitalicio=1;
   }else{
       $vitalicio=0;
         }  
    $archivoValido = true;
    $archivo = basename($_FILES["imagen"]["name"]);
    $tipoDeArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
   // Controlamos el tamañano en bytes. 524288 es el maximo (512 kb. 512 * 1024)
 if ($archivoValido && ($_FILES["imagen"]["size"] > 5224288)) {
    echo "<h2>El archivo es muy grande</h2>";
    $archivoValido = FALSE;
   }
   
// Controlamos la extensión del archivo
 if ($archivo != "" && $archivoValido && ($tipoDeArchivo != "jpg" && $tipoDeArchivo != "png" && $tipoDeArchivo != "jpeg" && $tipoDeArchivo != "gif")) {
     echo "<h2>Solamente archivos JPG, JPEG, PNG & GIF son permitidos</h2>";
     $archivoValido = FALSE;
    } 
    
 if ($archivoValido || $archivo == "") {      
    $editar="UPDATE persona set nombre='$nombre', apellido='$apellido',fecha_nacimiento='$fecha',edad='$edad',genero='$genero',
    email='$email',telefono='$telefono',vitalicio='$vitalicio',idDeporte='$idDeporte' WHERE idpersona=$idPersona";
    $resultado = mysqli_query($conexion,$editar); 
    $archivoSocio = "socio_$idPersona.$tipoDeArchivo";

    if ($archivo != "") {
      
      $archivo="imagen/".$foto;
      unlink($archivo); //elimino la foto de carpeta

         if (move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagen/$archivoSocio")){
            echo "<h2>El archivo ha sido subido</h2>";
            $update ="UPDATE persona SET imagen='$archivoSocio' WHERE idpersona = $idPersona";
            $resultado = mysqli_query($conexion, $update);
         }
      }
      
      header("Location: listaDeSocios.php");
   } else {
      echo "<h2>Ocurrio un error al subir el archivo</h2>";
   }

   mysqli_close($conexion);
?>