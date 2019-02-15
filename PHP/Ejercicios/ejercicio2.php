<?php
	// 2) Escribir un programa en PHP que dado un arreglo con numeros, 
	// informe la sumatoria de todos.
	
	$numeros = [25, 48, 23, 50, 26, 45];
	$sumatoria = 0;
	
	for($i=0; $i<count($numeros); $i++) {
		$sumatoria = $sumatoria + $numeros[$i];
	}
	
	echo "<h1>La sumatoria es: $sumatoria</h2>";
?>	