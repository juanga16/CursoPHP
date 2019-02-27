<form metodh='POST'>
    <select name='usuario' onchange='submit()'>
        <?php
            $sql="SELECT * FROM login";
            $rec=mysql_query($sql);
            while($row=mysql_fetch_array($rec)){
                echo "<option value='".$row[id]"'";
                if($_POST['usuario']==$row['id']){
                    echo "SELECTED";
                    echo ">";
                    echo $row['usuario'];
                    echo "</option>";
                }
            }
        ?>
    </select>
</form>
//debajo del genero para que cargue desde la base el select
<?php
    $sql="SELECT * FROM paises";
    $result= mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
?>
    <option><?php echo $mostrar['pais']?></option>;
<?php
    }
?>
//otra forma de eliminar
<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query ="DELETE FROM trabajos WHERE id=$id";
        $result= mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        header('Location: index.php');
    }
?>
//login
<?php
/*
include 'conexion.php';
$usuario= $_POST["usuario"];
$contraseña= $_POST["contraseña"];
/*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*//*
$query="SELECT * FROM login WHERE usuarios='$usuario' AND contraseñas='$contraseña'";
$rs= mysql_query($query);
$row=mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);
if($nr == 1){
    header("HTTP/1.0 403 ForbiSdden");//usuario sin permiso
}
else if($nr == 0) {
    header("Location:tabla.php");//entrar
}
?>
<?php
if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
    require_once("conexion.php");

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT * FROM login WHERE usuario='$usuario' AND contraseña='$contraseña';";

    if($resultado = $mysqli->query($consulta)){
        while ($row = $resultado->fetch_array()){
            $usu = $row["usuario"];
            $cont = $row["contraseña"];
        }
        $resultado->close();
    }
    $mysqli->close();

    if(isset($usuario) && isset($contraseña)){
        if($usuario == $usu && $contraseña == $cont){
            session_start();
            $_SESSION['logged'] = TRUE;
            header("Location: index.php");
        }

        else {
            header("Location: login.php?error=login");
        }
    }
}

else {
    header("Location: tabla.php");
}
?>