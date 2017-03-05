<?php
	$mystring = 'abc';
	$busqueda = 'a';
	$pos = strpos($mystring, $busqueda);

	

	if ($pos===FALSE) {
		echo "la letra '$busqueda' , no fue encontrada en la variable '$mystring'";
	}
	else{
		echo "la letra '$busqueda' , si fue encontrada en la variable '$mystring' </br> ";
		echo "la letra '$busqueda' , si fue encontrada en la variable '$mystring' en la posicion '$pos'";
	}
	
?>

