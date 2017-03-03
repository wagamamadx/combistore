<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$array = array("Raul","25","Privado");
		reset($array);
		foreach ($array as $key => $value) {
			echo "$key:$value<br/>\n";
		}
		
	?>
	
</body>
</html>