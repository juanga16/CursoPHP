<?php
	echo "Tipo de datos";
	echo "</br>";	
	
	echo "Boolean";
	echo "</br>";
	$bandera = True;
	echo $bandera;
	echo "</br>";
		
	echo "Entero";
	echo "</br>";
	$entero = 1599;
	echo $entero;
	echo "</br>";
		
	echo "Decimal";
	echo "</br>";
	$decimal = 1598.123;
	var_dump($decimal);
	echo $decimal;
	echo "</br>";
		
	echo "Strings";
	echo "</br>";
	$cadena = "Cadena de caracteres";
	var_dump($cadena);
	echo "</br>";
	echo $cadena;
	echo "</br>";

	echo "Arreglos sin Key";
	echo "</br>";
	$arreglo = ["Renault", "Peugeot", "Citroen"];
	var_dump($arreglo);
	echo "</br>";
	echo $arreglo[1];
	echo "</br>";	
	
	echo "Arreglos con Key";
	echo "</br>";
	$arreglo = [
		"fo" => "Ford",
		"ch" => "Chevrolet",
		"fi" => "Fiat"
	];
	var_dump($arreglo);
	echo "</br>";
	echo $arreglo["fo"];
	echo "</br>";
	
	echo "Constantes";
	echo "</br>";
	const PORCENTAJE_IVA = 21;
	echo PORCENTAJE_IVA;
?>