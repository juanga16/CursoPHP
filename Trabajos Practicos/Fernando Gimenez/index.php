<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
    function Nom(form,boton){
            form.botPress.value = boton;
            form.submit();
    }
</script>


</head>
<body>
<div class="header">
<table>
    <tr>
        <td rowspan=2 width="40px"> <img src="image/logo111m.png" border="0" height="70px" width="60px"> </td>
		<td> <h4> Taller PHP <br> CRUD Preguntas</h4> </td>
	</tr>
</table>
</div>

<?php

session_start();
require "configuracion.php";

//--------------------------------------------------------------------

$boton = $_REQUEST[botPress];

$usuario = $_REQUEST[usuario];
$clave = $_REQUEST[clave];
$mensaje_error = '<br><br>';

if ($boton == 'salir') {$_SESSION = array();
    session_destroy();}

if ($boton == 'acceso') {
    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' and clave=MD5('$clave')";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {
        $_SESSION["acceso"] = 1;
        $usuario = '';
        $clave = '';
    } else {
        $mensaje_error = '<br> Error de Acceso!<br> Ingrese nuevamente usuario/clave';}
}

if ($_SESSION["acceso"] == 1) {
    require "crud.php";
} else {
    require "login.php";
}
?>


 </body>
</html>