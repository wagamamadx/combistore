<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		echo "primeros 10 numeros</br>";
		$sum=0;
		for ($i=0; $i <=10; $i++) { 
			$sum+=$i;
			echo $i;
			echo ($i == 10)? "=":"+";
		}
		echo "<strong>$sum</strong>";
	?>
	
</body>
</html>