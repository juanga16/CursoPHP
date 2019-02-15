<?php
	echo "Funcion gettype()";
	echo "</br>";
	$entero = 3955;		
	echo $entero;
	echo "</br>";
	echo "gettype(): " . gettype($entero);
	echo "</br>";
	echo "is_integer(): " . is_integer($entero);
	echo "</br>";
	// is_long es un alias de is_integer
	echo "is_long(): " . is_long($entero);
	echo "</br>";
	echo "is_string(): " . is_string($entero);
	echo "</br>";
	$cadena = "Cadena de caracteres";
	echo $cadena;
	echo "</br>";
	echo "gettype(): " . gettype($cadena);
	echo "</br>";
	echo "is_integer(): " . is_integer($cadena);
	echo "</br>";
	echo "is_string(): " . is_string($cadena);
	echo "</br>";
	
	if (is_string($cadena)) {
		echo "Es una cadena";
	} else {
		echo "No es una cadena";
	}
?>