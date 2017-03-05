<?php

	$email = 'raul@gmail.com';
	$dominio = strstr($email,'@');

	echo $dominio;
	echo "</br>";
	$usuario = strstr($email,'@',TRUE);

	echo $usuario;
?>