<?php
	// La variable global $_SERVER contiene informacion del servidor
	echo "<h4>$ SERVER</h4>";
	echo $_SERVER["SERVER_NAME"];
	echo "</br>";
	
	foreach ($_SERVER as $key => $value) {
		echo "{$key} => {$value} ";
		echo "</br>";
	}
	
	echo "</br>";
	echo "</br>";
	
	echo "<h4>$ ENV</h4>";
	echo "</br>";
	
	// La variable global $_ENV podemos usarla para guardar informacion del contexto. Por ejemplo el usuario.
	foreach ($_ENV as $key => $value) {
		echo "{$key} => {$value} ";
		echo "</br>";
	}
	
	$_ENV["USER"] = "Juan";
	echo $_ENV["USER"];
	echo "</br>";
	
	$_ENV["MiPropiedad"] = "Dato de Prueba";
	echo $_ENV["MiPropiedad"];
?>