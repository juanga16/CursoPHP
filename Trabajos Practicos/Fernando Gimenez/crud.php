<?php
function clean_text($string)
{
    $string = str_replace("'", "", $string);
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
//--------------------------------------------------------------------
$op = $_REQUEST[op];
$Id = $_REQUEST[Id];
$clase = $_REQUEST[clase];
$pregunta = clean_text($_REQUEST[pregunta]);
$rta1 = clean_text($_REQUEST[rta1]);
$rta2 = clean_text($_REQUEST[rta2]);
$rta3 = clean_text($_REQUEST[rta3]);
$rta_ok = clean_text($_REQUEST[rta_ok]);
$buspreg = $_REQUEST[buspreg];
$subida = $_FILES['subida']['name'];

if ($boton == 'todas') {
    $buspreg = '';
    $pregunta = '';
    $rta1 = '';
    $rta2 = '';
    $rta3 = '';
    $rta_ok = '';
    $clase = '';
    $op = '';
}

if ($boton == 'grabar' and $pregunta != '' and $rta1 != '' and $rta2 != '' and $rta3 != '') {
// Verifica si al grabar se debe insertar un registro nuevo o actualizar uno existente
    if ($op == 'editar') {
        $sql = "update pregunta set clase='$clase',pregunta='$pregunta',rta1='$rta1',rta2='$rta2',rta3='$rta3',rta_ok='$rta_ok' where Id=$Id";
        $result = mysql_query($sql);
    } else {
        $sql = "insert into pregunta (clase,pregunta,rta1,rta2,rta3,rta_ok) values ('$clase','$pregunta','$rta1','$rta2','$rta3','$rta_ok')";
        $result = mysql_query($sql);
        $Id = mysql_insert_id();
    }

    $pregunta = '';
    $rta1 = '';
    $rta2 = '';
    $rta3 = '';
    $rta_ok = '';
    $clase = '';
    $op = '';

// FTP --------------------------------------------------------------------------------
    $local = $_FILES['subida']['tmp_name'];

    if ($local != '') {
//El tamaño por si lo necesitas
        $tamano = $_FILES['subida']['size'];

        $extension = end(explode(".", $_FILES["subida"]["name"]));

//Nombre del archivo a subir relacionado al Id
        $remoto = $Id . '.' . $extension;

        $id_ftp = ftp_connect($ftp_ip, $ftp_port);
        ftp_login($id_ftp, $ftp_user, $ftp_pass);
        ftp_pasv($id_ftp, true);
//carpeta donde se almacena el archivo
        ftp_chdir($id_ftp, "/domains/crud111mil.com.ar/public_html/pregunta");

// Verifica Subida
        if (ftp_put($id_ftp, $remoto, $local, FTP_BINARY)) {
            $sql = "update pregunta set imagen='$remoto' where Id=$Id";
            $result = mysql_query($sql);
        }
// ------------------------------------------------------------------------------------

    }
    $Id = '';
}

// Borra Imagen del alojamiento y actuliza la referencia o elimina el registro si corresponde
if ($op == 'borra_i' or $op == 'borrar') {

// Consulta nombre de la imagen a borrar -------------------------------------------------
    $sql = "SELECT * FROM pregunta WHERE Id=$Id";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1) {
        $remoto = mysql_result($result, 0, "imagen");
    }

    // FTP --------------------------------------------------------------------------------
    $local = $_FILES['subida']['tmp_name'];

    if ($remoto != '') {

        $id_ftp = ftp_connect($ftp_ip, $ftp_port);
        ftp_login($id_ftp, $ftp_user, $ftp_pass);
        ftp_pasv($id_ftp, true);
//carpeta donde se encuetran los archivos
        ftp_chdir($id_ftp, "/domains/crud111mil.com.ar/public_html/pregunta");

//Eliminacion archivo de imagen
        ftp_delete($id_ftp, $remoto);
    }

	
            // Borra Registro o actualiza campo imagen
            if ($op == 'borrar') {$sql = "delete from pregunta where Id=$Id";} else { $sql = "update pregunta set imagen='' where Id=$Id";}
            $result = mysql_query($sql);
            $op = '';
            $Id = '';
	
	
	}

// Carga registro a modificar
if ($op == 'editar') {
    $sql = "SELECT * FROM pregunta WHERE Id=$Id";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {
        $pregunta = mysql_result($result, 0, "pregunta");
        $rta1 = mysql_result($result, 0, "rta1");
        $rta2 = mysql_result($result, 0, "rta2");
        $rta3 = mysql_result($result, 0, "rta3");
        $clase = mysql_result($result, 0, "clase");
    }
}

?>

<form name="formulario" action="index.php" method="post" enctype="multipart/form-data">


<table border="0" cellpadding="0" cellspacing="0" class="tabla_n"  >


<tr>
    <td class="tdatos" align=center width="100px">  Pregunta <br> <?php if ($Id > 0) {print $Id;}?> </td>
	<td class="tdatos" align=center > <textarea name="pregunta" cols="128" rows="2"><?php print $pregunta;?></textarea></td>

</tr>
<tr>
    <td class="tdatos" align=center>  Respuesta<br>1/2/3  </td>

	<td class="tdatos" align=center > <textarea name="rta1" cols="40" rows="4"><?php print $rta1;?></textarea>
	<textarea name="rta2" cols="40" rows="4"><?php print $rta2;?></textarea>
	<textarea name="rta3" cols="40" rows="4"><?php print $rta3;?></textarea></td>

</tr>

</table>




<table border="0" cellpadding="0" cellspacing="0" class="tabla_n"  >

		<td class="tdatos" align=center width='100px'> Rta.Correcta </td>

	<td class="tdatos" align=left>


    <select name="rta_ok">
       <option value=1 <?php if ($rta_ok == 1) {print 'selected';}?>>1</option>
	   <option value=2 <?php if ($rta_ok == 2) {print 'selected';}?>>2</option>
	   <option value=3 <?php if ($rta_ok == 3) {print 'selected';}?>>3</option>
	</select>

	</td>

	<td class="tdatos" align=center width='100px'> Clase </td>

	<td class="tdatos" align=left width='290px'>


    <select name="clase">


 <?php

$SQLconsulta = 'SELECT * FROM clase';
$consulta = mysql_query($SQLconsulta) or die(mysql_error());

while ($lista = mysql_fetch_assoc($consulta)) {
    if ($lista['Id'] == $clase) {$seleccion = ' selected';} else { $seleccion = '';}
    echo '<option value="' . $lista['Id'] . '"' . $seleccion . '>' . $lista['descripcion'] . '</option>';
}

?>


	 </select>


	</td>
	<td class="tdatos" align=center>
	<input name="subida" type="file" style="background: #4479BA;color: #FFF; ">
	</td>

	<td class="tdatos" align=center width=120px>
	<input type="button" style="width:90px;" name="operacion" value="<?php if ($op == 'editar') {print 'Actualizar';} else {print 'Grabar';}?>" onclick="Nom(this.form,'grabar')">
	</td>
</tr>


</table>

<!-- 2 linea de comandos -------------------------------------------->
<table border="0" cellpadding="0" cellspacing="0" class="tabla_n"  >

<tr>
	<td class="tdatos" align=center width='180px'> B&uacutesqueda de Preguntas </td>

<td class="tdatos" align=center width='200px'> <input type="text" id="buspreg" name="buspreg" value="<?php print $buspreg;?>">  </td>


	<td class="tdatos" align=left>
	<input type="button" style="width:90px;" name="operacion" value="Buscar" onclick="Nom(this.form,'buscar')">
	<input type="button" style="width:90px;" name="operacion" value="Todas" onclick="Nom(this.form,'todas')">
	</td>

	<td class="tdatos" align=center width=120px>
	<input type="button" style="width:90px;" name="operacion" value="SALIR" onclick="Nom(this.form,'salir')">
	</td>



</table>


<!--------------------------  ENCABEZADO LISTA ------------------------->
<table border="0" cellpadding="0" cellspacing="0" class="tabla_n">
<tr>
	<th width="90px"> ID </th>
	<th width="120px"> CLASE </th>
	<th width="400px"> PREGUNTA </th>
	<th width="70px"> RTA OK </th>
	<th width="200px"> IMAGEN </th>
	<th> ACCION </th>
</tr>
</table>


<!--------------------------  LISTA ------------------------->
<div id="scroll">

<table border="0" cellpadding="0" cellspacing="0" class="tabla_n">


<?php
// Arma filtro de busqueda ------------------------------------
if ($buspreg != '') {$filtro = " where pregunta like '%$buspreg%' ";} else { $filtro = '';}
$SQL = "SELECT p.Id,p.clase,p.pregunta,p.rta1,p.rta2,p.rta3,p.rta_ok,p.imagen,c.descripcion FROM pregunta p inner join clase c on p.clase=c.Id $filtro order by Id desc";
$consulta = mysql_query($SQL) or die(mysql_error());

while ($row = mysql_fetch_array($consulta)) {
    ?>
<tr class=modo1>
	<td width="90px"> <?php print $row['Id'];?> </td>
	<td width="120px"> <?php print $row['descripcion'];?> </td>
	<td width="400px"> <?php print substr((trim($row['pregunta'])), 0, 100);?> </td>
	<td width="70px"> <?php print $row['rta_ok'];?> </td>
    <td width="200px"> <?php if ($row['imagen'] != '') {print ' <img src="http://200.85.158.72/~crud111mil/pregunta/' . $row['imagen'] . '" border="0" height="100px">';}?> </td>

	<td>
	<A HREF="index.php?op=editar&Id=<?php print $row['Id'];?>"> <img src="image/editar.png" width="15" height="15" border="0" ></a>
	<A HREF="index.php?op=borrar&Id=<?php print $row['Id'];?>"> <img src="image/borrar.png" width="15" height="15" border="0"></a>
	<?php if ($row['imagen'] != '') {print '<A HREF="index.php?op=borra_i&Id=' . $row['Id'] . '"> <img src="image/noimagen.png" width="15" height="15" border="0"></a>';}?>
    </td>
</tr>
<?php
}
?>


</table>
</div>

	<input type="hidden" name="op" value="<?php print $op;?>">
	<input type="hidden" name="Id" value="<?php print $Id;?>">
	<input type="hidden" name="botPress">
</form>

<div class="footer">
<img src="image/editar.png" width="18" height="18" border="0" ></a> Editar &nbsp;
<img src="image/borrar.png" width="18" height="18" border="0"></a>  Borrar &nbsp;
<img src="image/noimagen.png" width="18" height="18" border="0"></a> &nbsp; Eliminar Imagen &nbsp;
</div>