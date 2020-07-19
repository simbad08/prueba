<?php
	
		class metodos{
			public function mostrarDatos($sql){
			$c = new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatos($datos){
			$c = new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into usuarios(nombre, apellido, usuario,password, fechaIngreso)
						values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$fecha')";

			return $result=mysqli_query($conexion,$sql);
		}

		}
?>