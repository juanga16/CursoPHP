<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>trabajos de Herreria</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Style.css" />

</head>

<body>


    <nav class="navbar navbar-dark bg-dark" Style='height: 80px;'>
            <div class="form-group row">
                <div class='col-md-4'>
                    <a class="navbar-brand" href="logout.php">
                        <h1><img width='40px' src='imagenes/Herrería.png'><?php echo "     "."Trabajos de Herreria" ?>
                        </h1>
                    </a>
                </div>
                <?php
                //si existe usuario en la session muestra el formulario de consulta 
                if(isset($_SESSION['nombreUsuario'])){?>
                <div class='col-md-8' Style='Margin-top: 8px;'> <?php include('includes\formConsultas.php'); }?>
                </div>    
            </div>
    </nav>
