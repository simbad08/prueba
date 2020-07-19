<?php
	
		class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $bd="granbn";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}
$obj = new conectar();
	if($obj ->conexion()){
		echo "conexion exitosa";
	}else echo "fallo conectar";
?>