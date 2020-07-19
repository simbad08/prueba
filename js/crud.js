function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"eliminar.php",
				data:"idRegistro=" + idRegistro,
				success:function(r){
					if (r==1){
						mostrar();
						swal("Eliminado con Exito", "info");
					}else{
						swal("error al eliminar", "error");
					}

				}
			})
		} 
	});
}