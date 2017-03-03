<!DOCTYPE html>
<html lang="es"
>
<head>
	<meta charset="UTF-8">
	<title>Switch PHP</title>
</head>
<body>
	<?php
		$x=0;
		switch ($x) {
			case 1:
				echo "Este es el numero 1";	
			break;
			
			case 2:
				echo "Este es el numero 2";	
			break;

			case 3:
				echo "Este es el numero 3";	
			break;

			case 4:
				echo "Este es el numero 4";	
			break;

			default:
				echo "No es un numero 1 al 4";
		}
	?>
</body>
</html>