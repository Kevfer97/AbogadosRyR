


			function postNoticia(id, grupo){
					
				if (id == undefined) {
					id = 0;
				};
				if (grupo == undefined) {
					grupo = 0;
				};
				console.log(id);
				$.ajax({
					type: 'POST',
					url : '../../../php/servicios/get.noticias.php?id='+id+"&pag="+grupo,
					dataType: 'json'
				})
				.done(function( data ){
					console.log("corecto");

					console.log(data);
					$(".tblreg").remove();
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
							var cont = 0 ;
						data.noticia.forEach(function (noticia,index) {
									
							 	var aux = " ";
							 	var content = " ";
							 	content+= '<tr class="tblreg"><td colspan="7">Titulo: '+noticia.not_titulo+'</td></tr>';
								content+= '<tr class="tblreg"> '; 	
								content+= '<td>'+noticia.not_id+'</td>';
								content+= '<td>'+noticia.not_fecha_crea+'</br>'+noticia.not_usa_crea+'</td>';
								if(noticia.not_fecha_mod == null ){ aux = "-"}else{aux = noticia.not_fecha_mod+'</br>'+noticia.not_usa_mod}
								content+= '<td>'+aux+'</td>';
								if(noticia.not_estado == "A"){ aux = "Activa"}else{aux = "Inactiva"}
								content+= '<td>'+aux+'</td>';
								if(noticia.not_relevante == "A"){ aux = "Activa"}else{aux = "Inactiva"}
								content+= '<td>'+aux+'</td>';
								content+= '<td class="text-center ">';
								content+= '<button  data-id="'+noticia.not_id+'" ';
								content+= 'data-titulo="'+noticia.not_titulo+'" ';
								content+= "data-contenido='"+noticia.not_contendo+"' ";
								content+= "data-vista='"+noticia.not_vista_previa+"' ";
								content+= 'data-estado="'+noticia.not_estado+'" ';
								content+= 'data-relevante="'+noticia.not_relevante+'" ';
								content+= 'data-link="'+noticia.not_link+'" ';
								content+= 'data-desc="'+noticia.not_descarga+'" ';
								content+= 'class="btn btn-primary btnEditarNoti"><i class="fa fa-edit"></i></button></td>';
								content+= '<td><button data-id="'+noticia.not_id+'" class="btn btn-danger btnEliminarNoti"><i class="fa fa-trash"></i></button>';
								content+= '</td>';
								content+= '</tr>';
								
					$("#tblregistros").append(content);
						cont = cont + 1;
						});
						$("#smallCuanto").text(" (Datos Motrados: "+ cont +" )");
					if (cont < 10) {
						$("#btnNext").hide();
						$("#tblregistros").append('<tr class="tblreg"><td colspan="7"><h3>No Hay Mas Datos</h3></td></tr>');
					};

				})
				.fail(function(){
					console.log("Fallo!");
				});
				};




				$("#frmFiltrar").on("submit",function ( e ) {
					e.preventDefault();
					var formulario= $(this);
					var dataserializada = formulario.serialize();
					console.log(dataserializada)
						
				$.ajax({
					type: 'POST',
					url : '../../../php/servicios/get.noticiasBusqueda.php',
					dataType: 'json',
					data: dataserializada
				})
				.done(function( data ){
					console.log("corecto");

					console.log(data);
					$(".tblreg").remove();
					if (data.error) {
						console.log("algo raro paso");
						return;
					}
						var nDatos = 0;

						data.noticia.forEach(function (noticia,index) {
									
							 	var aux = " ";
							 	var content = " ";
							 	content+= '<tr class="tblreg"><td colspan="7">Titulo: '+noticia.not_titulo+'</td></tr>';
								content+= '<tr class="tblreg"> '; 	
								content+= '<td>'+noticia.not_id+'</td>';
								content+= '<td>'+noticia.not_fecha_crea+'</br>'+noticia.not_usa_crea+'</td>';
								if(noticia.not_fecha_mod == null ){ aux = "-"}else{aux = noticia.not_fecha_mod+'</br>'+noticia.not_usa_mod}
								content+= '<td>'+aux+'</td>';
								if(noticia.not_estado == "A"){ aux = "Activa"}else{aux = "Inactiva"}
								content+= '<td>'+aux+'</td>';
								if(noticia.not_relevante == "A"){ aux = "Activa"}else{aux = "Inactiva"}
								content+= '<td>'+aux+'</td>';
								content+= '<td class="text-center ">';
								content+= '<button  data-id="'+noticia.not_id+'" ';
								content+= 'data-titulo="'+noticia.not_titulo+'" ';
								content+= "data-contenido='"+noticia.not_contendo+"' ";
								content+= "data-vista='"+noticia.not_vista_previa+"' ";
								content+= 'data-estado="'+noticia.not_estado+'" ';
								content+= 'data-relevante="'+noticia.not_relevante+'" ';
								content+= 'data-link="'+noticia.not_link+'" ';
								content+= 'data-desc="'+noticia.not_descarga+'" ';
								content+= 'class="btn btn-primary btnEditarNoti"><i class="fa fa-edit"></i></button></td>';
								content+= '<td><button data-id="'+noticia.not_id+'" class="btn btn-danger btnEliminarNoti"><i class="fa fa-trash"></i></button>';
								content+= '</td>';
								content+= '</tr>';
								
					$("#tblregistros").append(content);
					nDatos = nDatos + 1
						});
						OcultarModal();

						if (nDatos == 1){
							alert("!!! "+nDatos +" dato encontrado !!!")
						}else{
							alert("!!! "+nDatos +" datos encontrados !!!")
						}
						$("#smallCuanto").text(" (Datos Motrados: "+ nDatos +" )");
				})
				.fail(function(){
					console.log("Fallo!");
				});

			});

		function PaginacionDeDatos(grupo){


		};