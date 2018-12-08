<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| RyR</title>
  	<link rel="icon" type="image/png" href="../../../img/icono.png" />
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="../../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../../dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="../../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../../js/lib/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="../../../css/style.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- importacion de TimelineMax para las animaciones -->
	<script src="../../../js/lib/TweenMax.min.js"></script>
	<!-- importacion de la libreria del editor de texto -->
	<script src="../../../ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="modal-sombra"></div>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>RyR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>RyR</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">        
          <!-- User Account Menu -->
          <li class=" user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../../img/userAdm.png " class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Kevin Juanito</span>
            </a>
           
          </li>
  
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../../img/userAdm.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Kevin Juanito</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RyR Abogados</li>
        <!-- Optionally, you can add icons to the links -->
         <li class="active"><a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Inicio</a></li>
        <li><a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Cuenta</a></li>
        <li><a href="../mantenimiento-frontend.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Usuarios</a></li>
        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Salir</a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar
        <small>Noticias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Master</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        			<div class="caja caja-azul caja-xl "> 
				<div class="caja-header"><br>

					<button class="btnAgregarNot btn btn-primary"><i class="fa fa-plus"></i> Agregar Noticia</button>
					<button class="btnFiltrar btn btn-info"><i class="fa fa-search"></i> Buscar Noticia</button>
					<br><br>
					
					
					
					<a class="caja-titulo">Noticias <small id="smallCuanto"></small></a>
					<div class="Pag-div aling-right">
						<a id="btnPrev" class="aling-left" ><i class="fa fa-arrow-left fa-2x Item-pointer Item-default"></i></a>&nbsp;
						<i  id="txt_actual"  data-pagina="1" class="caja-titulo Item-azul event-none">1</i>
						<a id="btnNext" class="aling-right" ><i class="fa fa-arrow-right fa-2x Item-pointer Item-default"></i></a>
					</div>
				</div>
				<div class="caja-body">
					<table id="tblNot" class="table table-striped">
						<thead>
							<tr>
								<td class="w50 text-negrita">ID</td>
<!-- 								<td class="w200 text-negrita">Titulo Noticia</td>
 -->								<td class="text-negrita">Fecha Crea</td>
								<td class="text-negrita">Fecha Modifica</td>
								<td class="text-negrita">Estado</td>
								<td class="text-negrita">Relevante</td>
								<td class="w50 text-negrita">Editar</td>
								<td class="w50 text-negrita">Eliminar</td>
								
							</tr>
						</thead>
						<tbody id="tblregistros">
							
							
						</tbody>
					</table>
				</div>
				
			</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Abogados RyR
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong>Todos los derechos reservados.
  </footer>


</div>



	<!--inicio Modal edit and insert -->

	<div class="Modal-Gen" id="modal1">
	<form class="form-horizontal" id="frmData">
	<div class="Modal-Gen-header">
		<div class="btn Modal-Gen-Salir btnCerarModal" >x</div>	
		<a class="Modal-Gen-Titulo">Noticia <small id="smlsub"></small></a>
		<input type="text" id="id_noticia" name="id_noticia" value="0" class="display-none">
		<input type="text" id="user_log" name="user_log" value="0" class="display-none">

	</div>	
	<hr class="dividir-modal">
	<div class="Modal-Gen-body">	
		<div class="row form-group">
			<div class="col-md-12">
				<label >Titulo Noticia</label>
					<input name="txtnot_titulo" id="txtnot_titulo" type="text" class="form-control" placeholder="Titulo">
				
			    </div>
			    <div class="col-md-12">
				<label >Contenido</label>
				<textarea type="textarea" id="ckeditor_contNot" name="" class="form-control ckeditor" placeholder=""></textarea>
				<textarea type="textarea" id="txtnot_contenido" name="txtnot_contenido" class="form-control display-none" placeholder=""></textarea>
				</div>
				<div class="col-md-12">
				<label >Vista previa</label>
				<textarea type="textarea" id="ckeditor_Vistapre" name="" class="form-control ckeditor" placeholder=""></textarea>
				<textarea type="textarea" id="txtnot_vista" name="txtnot_vista" class="form-control display-none" placeholder=""></textarea>
				</div>
			    <div class="col-md-6">
				<label >Estado de la Noticia</label>
				  <select class="form-control" name="ddlnot_estado" id="ddlnot_estado">
						    <option value="A">Activa</option>
			   				<option value="I">Inactiva</option>
			  				
			 	  </select>
				</div>
				 <div class="col-md-6">
				<label >Estado de Relevancia</label>
				  <select class="form-control" name="ddlnot_relevante" id="ddlnot_relevante">
						    <option value="A">Activa</option>
			   				<option value="I">Inactiva</option>
			  				
			 	  </select>
				</div>
			    <div class="col-md-6">
				<label >Link mas Informacion</label>
				<input type="text" id="txtnot_link" class="form-control" name="txtnot_link" placeholder="link para mas Informacion">
			    </div>
			    <div class="col-md-6">
				<label >Link Descarga</label>
				<input type="text" id="txtnot_desc" class="form-control" name="txtnot_desc" placeholder="link para mas Informacion">
			    </div>
			   
		</div>
	</div>	
	<hr class="dividir-modal">
	<div class="Modal-Gen-footer">	
		<a class="btn btn-secondary btnCerarModal">Cerrar</a>
			<button id="btnGuardar" type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Guardar</button>

		</div>	
	</form>
</div>
<!-- inicio Modal edit and insert -->



<!--inicio Modal filtrar -->

<div class="Modal-Gen" id="modal2">
	<form class="form-horizontal" id="frmFiltrar">
	<div class="Modal-Gen-header">
		<div class="btn Modal-Gen-Salir btnCerarModal" >x</div>	
		<a class="Modal-Gen-Titulo">Filtrar Busqueda<small id="smlsub"></small></a>
		
	</div>	
	<hr class="dividir-modal">
	<div class="Modal-Gen-body">	
		<div class="row form-group">
			<!-- <div class="col-md-12"> -->
				<div class="col-md-3">
					<label >Fecha Inicio: </label>
					<input type="text" id="txtFecha_Inicio"  class="form-control calendar" name="txtFecha_Inicio" placeholder="yyy/mm/dd">
	    		</div>
	    		<div class="col-md-3">
	    			<label >Fecha Fin: </label>
					<input type="text" id="txtFecha_Fin" class="form-control calendar" name="txtFecha_Fin" placeholder="yyyy/mm/dd">
	    		</div>

	    		 <div class="col-md-3">
					<label >Buscar por: </label>
					<select class="form-control" name="ddl_BuscarPor" id="ddl_BuscarPor">
				    <option value="0">Fecha Creacion</option>
	   				<option value="1">Fecha Edicion</option>
	  				
	 	  			</select>
				</div>
				 <div class="col-md-3">
					<label >Buscar por Estado: </label>
					<select class="form-control" name="ddl_BuscarEstado" id="ddl_BuscarEstado">
				    <option value="0">Ambas</option>
	   				<option value="1">Activa</option>
	   				<option value="2">Inactiva</option>
	  				
	 	  			</select>
				</div>
	    		
	   
			<!-- </div> -->
		</div>
	</div>	
	<hr class="dividir-modal">
	<div class="Modal-Gen-footer">	
		<a class="btn btn-secondary btnCerarModal">Cerrar</a>
			<button id="btnFiltrar" type="submit" class="btn btn-primary"><i class="fa fa-search"></i>  Buscar</button>

		</div>	
	</form>
</div>
<!--inicio Modal filtrar -->

<script src="../../../dist/js/adminlte.min.js"></script>
<script src="../../../js/admInsUpdNot.js"></script>
<script src="../../../js/mostrarNoticias_m.js"></script>
<script src="../../../js/main.js"></script>
<script src="../../../js/datepickerES.js"></script>
<script>
	

	 $('.calendar').datepicker({dateFormat: 'yy/mm/dd'});
		var user = $("#user").text();
		//alert(user);
		$("#user_log").val(user);
		$('#btnGuardar').click(function(e){
				e.preventDefault();
				var contenido = CKEDITOR.instances['ckeditor_contNot'].getData();
				$("#txtnot_contenido").val(contenido);
				contenido = CKEDITOR.instances['ckeditor_Vistapre'].getData();
				$("#txtnot_vista").val(contenido);
				// alert(contenido);
				var r = confirm("!!! Desea Guardar los Cambios !!!");
			if (r == true) {
   				 $('#frmData').submit();				
			};
			});
		$("#btnFiltrar").on("click", function(e) {
			e.preventDefault();
			var Fini = $("#txtFecha_Inicio").val();
			var Ffin = $("#txtFecha_Fin").val();
			// console.log("este es fini  "+Fini);
			// alert(Fini);
			var nece = "-";

			if (Fini.length == 0) {
				nece = "* La Fecha de Inicio es requerida\n";
			};
			if (Ffin.length == 0) {
				nece += "* La Fecha de Fin es requerida\n";
			};	

			if (nece == "-") {
				$('#frmFiltrar').submit();
			}else{
				alert(nece);
			};

		});

		$(".btnFiltrar").on("click",function(){
			$("#txtFecha_Inicio").val("");
			$("#txtFecha_Inicio").attr("placeholder", "yyy/mm/dd");
			$("#txtFecha_Fin").val("");
			$("#txtFecha_Fin").attr("placeholder", "yyy/mm/dd");
			MostrarModal("#modal2");
		});

		$(".btnAgregarNot").on("click",function(){
			$("#id_noticia").val("0");	
			$("#smlsub").text("( Nueva )");
			$("#txtnot_contenido").val(" ");
		 	$("#ddlnot_estado").val("I");
		 	$("#ddlnot_relevante").val("I");
		 	$("#txtnot_link").val(" ");
		 	$("#txtnot_desc").val(" ");
		 	$("#txtnot_vista").val(" ");
		 	$("#txtnot_titulo").val(" ");
	 		CKEDITOR.instances['ckeditor_contNot'].setData(" ");
	 		CKEDITOR.instances['ckeditor_Vistapre'].setData(" ");
			MostrarModal("#modal1");
		});


		var id = $_GET('id');
		console.log(id);
		postNoticia(id,0);
	
	var estcheck = true;
	var tl = new TimelineMax();

	$("#btnAnimar").on("click",function () {
		// console.log("entro");
		tl.to(".b-empre",0.3,{
				x : "100%"
				
				 // ease: Back.easeOut.config(0), x:90 
		}).to(".N-empre",0.7,{
				display: "block",
				// y:"-90px"
				y: -10,
				 ease: Back.easeOut.config(0), y: -5	 
		}).to(".s-empre",1,{
			display: "block",
				y: -8,
				 ease: Back.easeOut.config(0), y: 8

			},);
		});

		var $Lbar = $(".left-bar");
		var $Cblock = $(".cont-block");
		tl.to($Cblock,0.7,{
				 width: "100%",
				 ease: Back.easeOut.config(0), x:0
			});
	$("#chkMenu").on("click",function () {
		if (estcheck) {
			// console.log("entro al true");
			tl.to($Lbar,1,{
				x: 1400,
				display: "none",
				 ease: Back.easeOut.config(0), x: -1400 
			});
			
			estcheck = false;
		}else{
			// console.log("entro al false");
			tl.to($Lbar,0.5,{
				
				display: "inline-block",
				ease: Back.easeOut.config(0), x:0 
			});
			estcheck = true;
		};

	});
	$("body").on("click",".btnEditarNoti", function(){
		// console.log("entro");
		// console.log($(this));
		llenarModalEditarNoti($(this));
	});

	$("body").on("click",".btnEliminarNoti", function(){
		var delid = $(this).data("id");
		// alert(delid);
		var r = confirm("!!! Desea Eliminar la Noticia !!!");
			if (r == true) {
   				 DelteNoticia(delid);
			};
		
		
	});
	 function llenarModalEditarNoti(datos){
	 	var a = datos.data("id");
	 	$("#smlsub").text("( codigo: "+a+")");
	 	$("#id_noticia").val(a);
	 	$("#txtnot_contenido").val(datos.data("contenido"));
	 	$("#txtnot_vista").val(datos.data("vista"));
	 	$("#ddlnot_estado").val(datos.data("estado"));
	 	$("#ddlnot_relevante").val(datos.data("relevante"));
	 	$("#txtnot_link").val(datos.data("link"));
	 	$("#txtnot_desc").val(datos.data("desc"));
	 	$("#txtnot_titulo").val(datos.data("titulo"));
	 	CKEDITOR.instances['ckeditor_contNot'].setData(datos.data("contenido"));
	 	CKEDITOR.instances['ckeditor_Vistapre'].setData(datos.data("vista"));
	 	MostrarModal("#modal1");
	 };

	 var Nact = 0;
		$("#btnPrev").hide();
		$("#btnNext").on("click",function () {
				$("#btnPrev").show();
				$("#btnNext").show();
			Nact = $("#txt_actual").data("pagina");
				// alert(Nact);
			 postNoticia(0,Nact);
			Nact = Nact + 1;
			// alert(Nact);
			$("#txt_actual").data("pagina",Nact);
			$("#txt_actual").text(Nact);
			$("#sNotP").text(" (Pagina: "+Nact+")");
			$('body,html').animate({scrollTop : 0}, 500);

			// if (Nact >= Nmax) {
			// 	$("#btnNext").hide();
			// }
		});
		$("#btnPrev").on("click",function () {
			$("#btnNext").show();
			$("#btnPrev").show();
			Nact = $("#txt_actual").data("pagina");
			// alert(Nact);
			Nact = Nact - 1;
			postNoticia(0,Nact-1);
			// alert(Nact);
			$("#txt_actual").data("pagina",Nact);
			$("#txt_actual").text(Nact);
			$("#sNotP").text(" (Pagina: "+Nact+")");
			$('body,html').animate({scrollTop : 0}, 500);
			  
			if (Nact == 1) {
				$("#btnPrev").hide();
			};
		});
</script>
</body>
</html>


