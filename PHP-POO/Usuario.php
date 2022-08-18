<?php 


	require_once("ClassUsuario.php");

	$objUsuarioUno=new Usuario("Arturo Cardona","Arturo@info.com","Admin");
	echo $objUsuarioUno->getPerfil();
	$objUsuarioUno->setCambiarClave("Relampago");
	echo $objUsuarioUno->getPerfil();

?>