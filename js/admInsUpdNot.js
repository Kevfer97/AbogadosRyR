// (function(){

	// funcion que se ejecuta cunado se hace submit en el boton de guardar
	$("#frmData").on("submit",function ( e ) {
		e.preventDefault();
		var formulario= $(this);
		var dataserializada = formulario.serialize();
		console.log(dataserializada);
			$.ajax({
				type: 'POST',
				url : 'php/servicios/post.noticia.php',
				dataType: 'json',
				data:dataserializada
			})
			.done(function( data ){

				var idtxt = $("#id_noticia").val();
				// console.log(idtxt);
				if(idtxt == 0){ //se establece qeu accion se realizo update o insert para madar un aler
					var mensaje = " ingresada Correctamente";
				}else{
					var mensaje = " Actualizada Correctamente";
				}
				alert("Noticia"+mensaje);
				postNoticia(0);
				$(".Modal-Gen").hide(); //se oculta el modal
				$(".modal-sombra").hide(); // se oculta la sombra
				// console.log("Correcto!");
				// console.log( data ); // Se imprime en consola la api


			})
			.fail(function(){
				console.log("Fallo!");
			});
			
	});



		function DelteNoticia(id){

				if(id == undefined){
					id = 0;			
				};

					$.ajax({
					type: 'POST',
					url : 'php/servicios/post.DeleteNot.php?id='+id,
					dataType: 'json'
				})
				.done(function( data ){
					console.log("corecto");

					console.log(data);
					
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
						
					
					postNoticia();

				})
				.fail(function(){
					// console.log("Fallo!");
					alert("Dato Eliminado Correctamente");
					postNoticia();
				});
		};




// })();