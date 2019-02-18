<?php
    // Siempre se llama al comienzo para crear la sesion o reanudar la actual
    session_start();

    // session_destroy: destruye toda la información asociada con la sesión actual
    // session_name: devuelve el nombre de la sesión actual
    // session_id: devuelve el id de sesión para la sesión actual o la cadena vacía ("") si no hay sesión actual (no existe id de sesión actual)

   
    $usuario = "";
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
      
        $usuario = $_POST['usuario'];
        $password = $_POST['password']; 
      
        if($usuario == "juan" && $password == "pass") {
            $_SESSION['nombreUsuario'] = $usuario;
         
            header("location: home.php");
        } else {
            $error = "El usuario o la clave es invalida";
        }
    }
?>
<html>
   
   <head>
      <title>Login</title>      
   </head>
   
   <body>      
        <form method="post">
            <label>Usuario:</label>
            <br/>
            <input type="text" name="usuario" value="<?php echo $usuario ?>"/>
            <br/>
            <label>Password:</label>
            <br/>
            <input type="password" name="password"/>
            <br/>
            <label><?php echo $error ?></label>
            <br/>
            <?php echo var_dump($_SESSION); ?>
            <br/>
            <input type="submit" value="Enviar"/><br />
        </form>
   </body>
</html>