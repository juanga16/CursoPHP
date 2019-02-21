<?php
	// 3) Escribir un programa en PHP que dado un arreglo con numeros, informe el mayor.
	
	$numeros = [12, 35, 6, 33, 50];
	$mayor = 0;
	
	for($i=0; $i<count($numeros); $i++) {
		if ($numeros[$i] > $mayor) {
			$mayor = $numeros[$i];
		}
	}
	
	echo "<h1>El mayor es: $mayor</h2>";
?>