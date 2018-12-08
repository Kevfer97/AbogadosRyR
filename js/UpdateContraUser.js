	$("#frmData").on("submit",function ( e ) {
		e.preventDefault();
		var formulario= $(this);
		var dataserializada = formulario.serialize();
		console.log(dataserializada);
			$.ajax({
				type: 'POST',
				url : '../../php/servicios/post.updateContra.php',
				dataType: 'json',
				data:dataserializada
			})
			.done(function( data ){

				alert("Contraseña Actualizada Corectamente");
				$("#txtUserContraN1").val("");
           $("#txtUserContraN2").val("");
			})
			.fail(function(){
				// console.log("Fallo!");
				alert("Error al Actualizar la Contraseña !!!");
			});
			
	});