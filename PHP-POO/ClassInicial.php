<?php

class Operacion{
	public $cantidad1=0;
	public $cantidad2=0;
	public $resultado=0;

	function __construct($intCant1,$intCant2)
	{
		$this->cantidad1=$intCant1;
		$this->cantidad2=$intCant2;
	}

	public function getSuma()
	{
		$this->resultado=$this->cantidad1+$this->cantidad2;
		return $this->resultado;
	}

	public function getResta()
	{
		$this->resultado=$this->cantidad1-$this->cantidad2;
		return $this->resultado;
	}

	public function getMultiplicacion()
	{
		$this->resultado=$this->cantidad1*$this->cantidad2;
		return $this->resultado;
	}

	public function getDivision()
	{
		$this->resultado=$this->cantidad1/$this->cantidad2;
		return $this->resultado;
	}
}



?>