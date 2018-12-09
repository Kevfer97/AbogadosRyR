	

	function postUsuario(id){
					
				if (id == undefined) {
					id = 0;
				};
				
				
				$.ajax({
					type: 'POST',
					url : '../../php/servicios/get.Usuario.php?id='+id,
					dataType: 'json'
				})
				.done(function( data ){
					console.log("corecto");

					
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
									// console.log(data);
								$("#usuarioTxt").val("");
							 	$("#nombresTxt").val( "");
							 	$("#apellidosTxt").val( "");
							 	$("#correoTxt").val("");
							 	$("#tpUsuario").val( "");
									 // alert(data.Usuarios[0].CORREO);
							 	$("#usuarioTxt").val( data.Usuarios[0].USUARIO);
							 	$("#nombresTxt").val( data.Usuarios[0].NOMBRES);
							 	$("#apellidosTxt").val( data.Usuarios[0].APELLIDOS);
							 	$("#correoTxt").val( data.Usuarios[0].CORREO);
							 	$("#tpUsuario").val( data.Usuarios[0].TIPO_USUARIO);
					
					

						

				})
				.fail(function(){
					console.log("Fallo!");
				});
				};