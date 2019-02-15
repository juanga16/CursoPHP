<?php
	echo "Estructuras de Control";
	
	$valor1 = 100;
	$valor2 = 60;

	echo "</br>";
	echo "Ejemplo de If/Else";
	echo "</br>";
	
	if ($valor1 > $valor2) {
		echo "Valor1 es mayor que Valor2";
	} elseif ($valor2 == $valor2) {
		echo "Valor1 es igual que Valor2";
	} else {
		echo "Valor1 es menor que Valor2";
	}
	
	echo "</br>";
	echo "Ejemplo de While (Mientras)";
	echo "</br>";
	
	$i = 1;
	$cantidad = 10;
	while ($i <= $cantidad) {
		echo $i++;
		echo "</br>";
	}
	
	echo "</br>";
	echo "Ejemplo de Do-While (Hasta)";
	echo "</br>";
	
	$i = 1;
	$cantidad = 10;
	do {
		echo $i++;
		echo "</br>";
	} while ($i <= $cantidad);
	
	echo "</br>";
	echo "Ejemplo de For";
	echo "</br>";
	
	$i = 1;
	$cantidad = 10;
	for ($j = 1; $j <= $cantidad; $j++) {
		echo $j;
		echo "</br>";
	}

	echo "</br>";
	echo "Ejemplo de For Each";
	echo "</br>";
	
	$valores = array("Coronel Suarez", "Pigue", "Cura Malal");
	foreach ($valores as &$valor) {
		echo $valor;
		echo "</br>";
	}

	echo "</br>";
	echo "Ejemplo de Switch";
	echo "</br>";
	
	$valor = 2;
	switch ($valor) {
    case 1:
        echo "Valor es igual a 1";
        break;
    case 2:
        echo "Valor es igual a 2";
        break;
    default:
        echo "Valor es igual a 3";
        break;
	}
?>