				

				function GetBloqueNoticia(bloque){
					
				if (bloque == undefined) {
					bloque = 1;
				};
				console.log(bloque);
				$.ajax({
					type: 'POST',
					url : 'php/servicios/get.noticias_b.php',
					dataType: 'json'
				})
				.done(function( data ){
					console.log("corecto");

					console.log(data);
					$(".divnot").remove();
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
						var inicio = 5;
						var final = 1;
						var contVuelta = 1;
						var contNoti = 0;
						inicio = (inicio * bloque) - 4;
						final = 4 + inicio;
						data.noticia.forEach(function (noticia,index) {
									
							if(contVuelta >= inicio && contVuelta <= final ){
								var content = ' '; 
							
								content+='<div class="caja caja-azul caja-xl divnot" >';
								content+='<div class="caja-header">';
								content+='<a href="" class="caja-titulo Item-azul event-none">'+noticia.not_titulo+'</a>';
								content+='</div>';
								content+='<div class="padding-10">';
								content+= noticia.not_vista_previa;
								content+='<label class="btn btn-primary btn-xs aling-right btnMostrarNoti" ';
								content+='data-titulo="'+noticia.not_titulo+'" ';
								content+='data-link="'+noticia.not_link+'" ';
								content+= 'data-desc="'+noticia.not_descarga+'" ';
								content+="data-contenido='"+noticia.not_contendo+"' ";
								content+=' >Leer Mas</label>';
								content+='</div>';
								content+='</div>';
								$("#Contenedor-Noticias").append(content);
								contNoti = contNoti + 1;
							};
							contVuelta = contVuelta + 1;

						});

					if (contNoti < 5) {
						$("#btnNext").hide();
						$("#Contenedor-Noticias").append('<h3 class="divnot" >&nbsp;&nbsp;&nbsp;&nbsp;No Hay Mas Noticias</h3>');
					};

				})
				.fail(function(){
					console.log("Fallo!");
				});
		};



