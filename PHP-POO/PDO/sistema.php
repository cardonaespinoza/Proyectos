<?php
	require_once("Autoload.php");
	
	$objUsuario=new Usuario();

	//$insert=$objUsuario->insertUsuario("Carlos",43534564,"Carlos@info.com");
	//echo $insert;

	$users=$objUsuario->getUsuarios();

	print_r("<pre>");
	print_r($users);
	print_r("</pre>");

	$updateUser=$objUsuario->updateUsuario(1,"Octavio",54324354,"Cielos@conexion.com");
	echo $updateUser;

	$users=$objUsuario->getUser(2);

	print_r("<pre>");
	print_r($users);
	print_r("</pre>");

	$BorrarUsuario=$objUsuario->BorrarUsuario(3);
	echo $BorrarUsuario;

?>