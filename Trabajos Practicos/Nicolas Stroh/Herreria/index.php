<?php
   include('includes\session.php');
   include('db.php');  
?>

<html>

<head>
    <?php  
            // Se incluye el encabezado con la barra de consulta 
             include('includes\header.php');  

            //Me guardo en variables el usuario y el ID de la session
             $usuario= $_SESSION['nombreUsuario'];
             $UsuarioId= $_SESSION['idUsuario'];
      ?>
    <title>Herreria</title>
</head>



<body>
    <div class="row">
        <div class="col-sm-3">
            <br>
            <h1> Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1>
            
            <?php 
            // Muestro Los mensajes guardados en la session
            if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <h5><?= $_SESSION['message']?></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Elimino los datos de la session -->
            <?php session_unset(); } ?>


            <?php  
                // Vuelvo a cargar los datos de usuario y contraseña a la session
                $_SESSION['nombreUsuario'] = $usuario;
                $_SESSION['idUsuario']=$UsuarioId;
                  //Boton Nuevo Trabajo que se encuentra a la izquierda que contiene el formulario    
                  include('includes\formNuevoTrabajo.php'); 
            ?>
            <div class="container">
                <br>
                <?php  
                    // incluyo la tabla con una barra de progreso que me muestra el % de los trabajos pagos
                  include('includes\progresbar.php');
                  include('includes\MostrarDatos.php');   
            ?>
                <h2><a href="logout.php">Cerrar sesión</a></h2>

            </div>
        </div>
    </div>
</body>


</html>
<!-- ************* Muestra y verifica la imagen antes de guardarla ********** -->
<script type="text/javascript">
function validarExt() {
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.JPG||.jpg||.png||.PNG)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alert('Asegurese de haber seleccionado una imagen');
        archivoInput.value = '';
        return false;

    } else {
        //PRevio del PDF
        if (archivoInput.files && archivoInput.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                document.getElementById('visorArchivo').innerHTML =
                    '<embed src="' + e.target.result + '" width="280" height="180" />';
            };
            visor.readAsDataURL(archivoInput.files[0]);
        }
    }
}
</script>
<?php 
    include('includes\footer.php');
?>