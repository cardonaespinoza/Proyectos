<?php
	require_once("classProducto.php");

	class Mueble extends Producto
	{
		public $strColor;
		public $strMaterial;
		public $strStatus="Agotado";

		public function __construct(string $Descripcion,float $Precio,string $Marca,string $Color, string $Material)
		{
			parent::__construct($Descripcion,$Precio);
			$this->strMaterial=$Material;
			$this->strColor=$Color;
		}

		public function getInfoProducto()
		{
			$arrProducto=array('Producto'=>$this->strDescripcion,
							   'Precio'=>$this->fltPrecio,
							   'Stock Minimo'=>$this->intStockMinimo,
							   'Estado'=>$this->strStatus,
							   'Color'=>$this->strColor,
							   'Material'=>$this->strMaterial
		);
			return $arrProducto;
		}
	}

?>