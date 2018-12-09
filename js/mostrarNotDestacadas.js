function postDestacada(){
					
				
				
				$.ajax({
					type: 'POST',
					url : 'php/servicios/get.Not.Destaca.php',
					dataType: 'json'
				})
				.done(function( data ){
					console.log("corecto");

					
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
								var num = 1;
						data.noticia.forEach(function (noticia,index) {
									
							 	var content = " ";
								
								content+= '<hr><label data-id="'+noticia.not_id+'" ';
								content+= 'data-titulo="'+noticia.not_titulo+'" ';
								content+= "data-contenido='"+noticia.not_contendo+"' ";
								content+= "data-vista='"+noticia.not_vista_previa+"' ";
								content+= 'data-estado="'+noticia.not_estado+'" ';
								content+= 'data-relevante="'+noticia.not_relevante+'" ';
								content+= 'data-desc="'+noticia.not_descarga+'" ';
								content+= 'data-link="'+noticia.not_link+'" ';
								content+= 'class="btnMostrarDestaca  pointer">'+num+' '+noticia.not_titulo+'</label>';
								
								
					$("#NotDestaca").append(content);
					num = num + 1;
						});

				})
				.fail(function(){
					console.log("Fallo!");
				});
				};