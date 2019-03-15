<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!--boostrap-->
    <title>Club -pagina oficial</title>  
    
</head>

<body>

<div class="p-3 mb-2 bg-primary text-white">Socios</div> <!--boostrap-->
<br><br><br><br><br><br><br>
<form action="validar.php" method= "post" ;<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>>
     <div class="form-row align-items-center">
     <div class="col-sm-3 my-1">
          <label class="sr-only"  for="usuario">Usuario</label>
          <input type="text" required name="usuario" class="form-control" id="inlineFormInputName" placeholder="usuario">
     </div>
     <div class="col-sm-3 my-1">
          <label class="sr-only" for="clave">Contraseña</label>    
          <input type="password" required name="clave" class="form-control" id="inlineFormInputGroupUsername" placeholder="contraseña">
     </div> 
         <div class="col-auto my-1">
         <button type="submit" class="btn btn-primary">Entrar</button>
    </div>
</form>
    </body>
</html>
