<?php
	function imprimirMenu() {
		echo "<ul>";
		echo "<li><a href='/clase 2/funciones_2.php'>Opcion 1</a></li>";
		echo "<li><a href='/clase 2/funciones_3.php'>Opcion 2</a></li>";
		echo "</ul>";
	}
	
	function calcularIva(&$precio) {	
		return $precio * 0.21;
	}
	
	function calcularPrecioTotal(&$precio, $iva = 21) {
		$precio = $precio * (1  + $iva/100);
	}
	
	imprimirMenu();
	
	$precio = 1000;
	$valorIva = calcularIva($precio);
	echo "$precio</br>";	
	echo "$valorIva</br>";	
	
	calcularPrecioTotal($precio, 40);
	echo "$precio</br>";
?>