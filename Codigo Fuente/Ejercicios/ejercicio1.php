<?php
	// 1) Escribir un programa en PHP que imprima los numeros impares entre 1 y 100 
    // dentro de un H1 y los pares dentro de un H2.
	
	$cantidad = 100;
	
	for($i=1; $i<=100; $i++) {
		if ($i % 2 == 0) {
			// echo "<h2>Numero par: $i</h2>";
			echo "<h2>Numero par: " . $i . "</h2>";
		} else {
			echo "<h1>Numero impar: $i</h1>";
		}
	}
?>

