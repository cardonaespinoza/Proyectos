<?php
	require_once("classMueble.php");
	final class Mesa extends Mueble
	{
		private $strForma="";
		protected $strTamanio="";
	

	public function __construct(string $Descripcion,float $Precio,string $Marca,string $Color, string $Material,string $Tamanio)
	{
		parent::__construct($Descripcion,$Precio,$Marca,$Color,$Material);
		$this->strTamanio=$Tamanio;
	}

	public function setForma(string $Forma)
	{
		$this->strForma=$Forma;
	}

	public function getInfoProducto()
	{
		$arrProducto=array('Producto'=>$this->strDescripcion,
							   'Precio'=>$this->fltPrecio,
							   'Stock Minimo'=>$this->intStockMinimo,
							   'Estado'=>$this->strStatus,
							   'Color'=>$this->strColor,
							   'Material'=>$this->strMaterial,
							   'Tamaño'=>$this->strTamanio,
							   'Forma'=>$this->strForma);
		return $arrProducto;
	}



	}
?>