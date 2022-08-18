<?php

	class Persona
	{
		public $intDPI;
		public $strNombre;
		public $intEdad;

		function __construct(int $DPI, string $Nombre, int $Edad)
		{
			$this->intDPI=$DPI;
			$this->strNombre=$Nombre;
			$this->intEdad=$Edad;
		}

		function getDatosPersonales()
		{
			$datos="
				<h2>DATOS PERSONALES</h2>
				DPI:{$this->intDPI}<br>
				Nombre:{$this->strNombre}<br>
				Edad:{$this->intEdad}<br>

			";
			return $datos;
		}



	}


?>