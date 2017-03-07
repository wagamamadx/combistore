<?php
	$str = "Hola Raul ?";
	echo $str." Esto no es seguro en una DB query.<br />";

	echo addslashes($str)." Esto si es seguro en una DB query.";
	print_r("Evy fea");
?>