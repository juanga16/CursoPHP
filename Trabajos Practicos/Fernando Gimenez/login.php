<form name="formulario" action="index.php" method="post" enctype="multipart/form-data">

<div class="loginoo"  >

 <table width="100%">


	 	<td align=center height=150px><h2>USUARIO </h2><input type="text" id="usuario" name="usuario"> </td>
	</tr>
		<tr>
	 	<td align=center><h2>CLAVE </h2><input type="password" id="clave" name="clave"> </td>
	</tr>

		<tr>
	 	<td align=center><?php print $mensaje_error;?><br></td>
	<tr>

	<tr>
  	  <td align=center height=150px>
			<input type="button" style="padding: 15px 20px;background: #3498DB;color: #FFF; FONT-SIZE: 12pt; FONT-FAMILY: Verdana; width:280px; " name="operacion" value='INGRESAR' onclick="Nom(this.form,'acceso')">
	  </td>
	</tr>
</table>

</div>
<br>
<input type="hidden" name="botPress">
</form>
      
	  
	  <div class="footer"> 
	  Usuario: Admin / Clave: 12345 
	  </div>

