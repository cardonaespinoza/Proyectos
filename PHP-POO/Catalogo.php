<?php
	require_once("classMesa.php");

	$objCama=new Producto("Cama",10500);
	$arrInfoProducto=$objCama->getInfoProducto();
	print_r("<pre>");
	print_r($arrInfoProducto);
	print_r("</pre>");

	$objMueble=new Mueble("Closet",2000,"Casita","Cafe","Madera");
	$arrInfoMueble=$objMueble->getInfoProducto();
	print_r("<pre>");
	print_r($arrInfoMueble);
	print_r("</pre>");

	$objMesa=new Mesa("Closet",2000,"Casita","Cafe","Madera","3mts");
	$objMesa->setForma("Redonda");
	$arrInfoMesa=$objMesa->getInfoProducto();
	print_r("<pre>");
	print_r($arrInfoMesa);
	print_r("</pre>");
?>