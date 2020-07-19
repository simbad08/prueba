<?php
	require_once "conexion.php";
	require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	<form action="procesos/insertar.php" method="POST">
		<label>Nombres</label>
		<input type="text" name="nombres">
		<input type="text" name="apellidos">
		<input type="text" name="usuario">
		<input type="password" name="password">

		<button>agregar</button>		
	</form>



	<table style="border-collapse: collapse;" border="1">
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Usuario</td>
		<td>contraseña</td>
		<td>FechaIngreso</td>
	</tr>
<?php
	$obj = new metodos();
	$sql="SELECT idUsuario, nombre, apellido, usuario, password, fechaIngreso from usuarios";
	$datos=$obj->mostrarDatos($sql);

	foreach ($datos as $key) {	
?>
	<tr>
		<td><?php echo $key['nombre']; ?></td>
		<td><?php echo $key['apellido']; ?></td>
		<td><?php echo $key['usuario']; ?></td>
		<td><?php echo $key['password']; ?></td>
		<td><?php echo $key['fechaIngreso']; ?></td>
	</tr>
<?php
}
?>

</table>
</body>
</body>
</html>