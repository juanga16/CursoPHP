<?php
	print "Print recibe un solo parametro";
	print "</br>";
	$dia = 11;
	$mes = 2;
	$anio = 2019;
	
	// Separamos los parametros con comas
	echo  $dia, $mes, $anio;
	
	print '<h1>Titulo impreso con Print</h1>';
	echo '<h1>Titulo impreso con Echo</h1>';
	
	/*
		Print: no es una funcion, es una construccion del lenguaje. Recibe un solo parametro
		Echo: no es una funcion, es una construccion del lenguaje. Puede recibir mas de un parametro separado por comas. Es un poco mas rapida que print.
		Se pueden usar con o sin parentesis.	
	*/	
?>