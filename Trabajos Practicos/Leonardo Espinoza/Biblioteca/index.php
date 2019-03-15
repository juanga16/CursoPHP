<!--
/*
*                       Leonardo Emanuel Espinoza
*                           $index-php
*                   Ultima modificacion : 05/03/2019
*                           Version: 1.5
*/
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Login</title>
</head>
<body>
    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <blockquote class="blockquote text-center">
            <h1>Login</h1>
        </blockquote>
        <form action="login.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" />
                </div>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" />
                </div>   
            </div> 
            <br>
            <input type="submit" value="Entrar" name="Entrar" class="btn btn-primary btn-lg btn-block"/>
        </form>
        <br><br><br><br><br>
        <blockquote class="blockquote text-center">
            <p class="mb-0">Espero les guste este crud</p>
            <footer class="blockquote-footer">Realizado por alumno: <cite title="Source Title">Leonardo Emanuel Espinoza</cite></footer>
        </blockquote>
    </body>
</html>      
</body>