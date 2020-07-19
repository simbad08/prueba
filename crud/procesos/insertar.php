<?php
	require_once "../conexion.php";
	require_once "../metodosCrud.php";
	
	$nombre=$_POST['nombres'];
	$apellido=$_POST['apellidos'];
	$usuario=$_POST['usuario'];
	$password=sha1($_POST['password']);
	/**$fechaIngreso=$_POST['fecha'];**/

	$datos=array(
		//en esta parte hay necesidad de colocarlo exactamente igual como esta en la base de datos solo fue por si acaso :)
			$nombre,
	    	$apellido,
	    	$usuario,
	    	$password
	    	/**$fechaIngreso**/
	    		);


	$obj= new metodos();
	if($obj->insertarDatos($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}
?>