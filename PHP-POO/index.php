<?php

	require_once("ClassInicial.php");

	$operacion1=new operacion(10,2);

	$total_suma=$operacion1->getSuma();
	$total_resta=$operacion1->getResta();
	$total_multiplicacion=$operacion1->getMultiplicacion();
	$total_division=$operacion1->getDivision();

	echo "La suma es: ".$total_suma."<br>";
	echo "La resta es: ".$total_resta."<br>";
	echo "La multiplicacion es: ".$total_multiplicacion."<br>";
	echo "La division es: ".$total_division."<br>";


?>