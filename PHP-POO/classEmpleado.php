<?php
	require_once("classPersona.php");

	class Empleado extends Persona
	{

		protected $strPuesto;

		function __construct(int $DPI,string $Nombre,int $Edad)
		{
			parent::__construct($DPI,$Nombre,$Edad);
		}
	
		public function setPuesto(string $Puesto)
		{
			$this->strPuesto=$Puesto;
		}

		public function getPuesto():string
		{
			return $this->strPuesto;
		}

	}

?>