<?php
	$array = array('Hola','soy',10);
	print_r(implode(" ", $array)).'<br/>';
	echo "<br/>";
	echo implode("<br/> ",$array);
?>