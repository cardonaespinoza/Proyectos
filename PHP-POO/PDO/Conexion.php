<?php
	class Conexion{
		private $host="localhost";
		private $user="root";
		private $password="";
		private $db="db_sistema";
		private $conect;

		public function __construct()
		{
			$ConnectionString="mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
			try{
				$this->conect=new PDO($ConnectionString,$this->user,$this->password);
				$this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				echo "Conexion Exitosa";
			}
			catch(Exception $e)
			{
				$this->conect="Error de Conexion";
				echo "Error: ".$e->getMessage();
			}
		}

		public function connect()
		{
			return $this->conect;
		}

	}
?>