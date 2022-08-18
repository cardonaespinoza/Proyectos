<?php

	require_once("classPersona.php");

	class Cliente extends Persona
	{
			protected $fltCredito;

		function __construct(int $DPI,string $Nombre,int $Edad)
		{
			parent::__construct($DPI,$Nombre,$Edad);
		}

		public function setCredito($credito)
		{
			$this->fltCredito=$credito;
		}

		public function getCredito():float
		{
			return $this->fltCredito;
		}

	}


?>