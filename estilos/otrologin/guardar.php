<?php
//no me sirve borrar
	include ("conexion2.php");
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$tipo = $_POST['tipo'];
	$documento = $_POST['documento'];
	$fecha = $_POST['fecha'];
	$lote = $_POST['lote'];
	$unidades = $_POST['unidades'];
	$nombres2 = $_POST['nombres2'];
	$apellidos2 = $_POST['apellidos2'];
	$tipo2 = $_POST['tipo2']
	$documento2 = $_POST['documento2'];
	$fecha2 = $_POST['fecha2'];

	$query="INSERT INTO datos(nombres, apellidos, tipoDoc, numeroDoc, fechaEntrega, numeroLote, unidades, nombres2, apellidos2, tipoDoc2, numeroDoc2, fechaEntrega2) VALUES ('$nombres', '$apellidos', '$tipo', '$documento', '$fecha', '$lote', '$unidades', '$nombres2', '$apellidos2', '$tipo2', '$documento2', '$fecha2')";

$resultado= $conexion->query($query);

if ($resultado) {
	header("Location: tabla.php");
}else {
	echo "error a la conexion";
}	
?>