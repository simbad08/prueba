<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	 <script src="js/maxLength.js"></script>
    <script> 
        $(function(){
            $('#nombres,#apellidos,#password').maxLength(25);
        });
    </script>
</head>
<body background="estilos/fondo2.jpg">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registro de Administrador</div>
					<div class="panel panel-body">
						<form id="frmRegistro" action="crud/procesos/insertar.php" method="POST">
							<label>Nombres</label>
							<input type="text" class="form-control input-sm" name="nombres" id="nombres">
							<label>Apellidos</label>
							<input type="text" class="form-control input-sm" name="apellidos" id="apellidos">
							<label>Rol de Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Contraseña</label>
							<input type="password" class="form-control input-sm" name="password" id="password">
							<p></p>
							<button class="btn btn-primary" id="registro">Registrarse</button>
							<a href="login.php" class="btn btn-success">Regresar al Login</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"crud/procesos/insertar.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Agregado con exito");
					}else{
						alert("Fallo al agregar :(");
					}
				}
			});
		});
	});
</script>
