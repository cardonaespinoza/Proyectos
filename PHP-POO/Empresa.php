<?php

	require_once("classEmpleado.php");
	require_once("classCliente.php");

	$objEmpleado=new Empleado(345,"Andres Cardona",45);
	$objEmpleado->setPuesto("Administrador");
	echo $objEmpleado->getDatosPersonales();
	echo "Puesto: ".$objEmpleado->getPuesto();

	$objCliente=new Cliente(546,"Elena Gonzalez",21);
	$objCliente->setCredito(3200);
	echo $objCliente->getDatosPersonales();
	echo "Credito: ".$objCliente->getCredito();

?>