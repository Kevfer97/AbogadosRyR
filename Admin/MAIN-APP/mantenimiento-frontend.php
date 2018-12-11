<?php 
session_start();



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
      if ($_SESSION['tipoUsuario'] != 1){
           header("location: cerrarSesion.php");
      };
    } else {
        header("location:../../index.html");
        exit;
    };

 ?>

<!doctype html>

<html lang="en">
  <head>
    <title>Admin| RyR</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		  	<link rel="icon" type="image/png" href="../../img/icono.png" />
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/lib/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



  </head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="modal-sombra"></div>

<!-- Josue aqui quiero los Datos del ususario dentro de las etiquetas  -->
<a id="AdmEmailUser" class="display-none">
  <?php session_start(); echo $_SESSION['correo']; ?> </a>
<a id="AdmNameUser" class="display-none"><?php echo $_SESSION['nombres']; ?></a>
<!-- fin datos -->

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
              <img src="../../img/userAdm.png " class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span  class="hidden-xs ponerUserName">User</span>
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
          <img src="../../img/userAdm.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="ponerUserName">User</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RyR Abogados</li>
        <!-- Optionally, you can add icons to the links -->
         <li><a href="ADMIN/admMasterNot.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Inicio</a></li>
        <li ><a href="Usuario.php"><i class="fa fa-cog fa-fw"></i>&nbsp; Cuenta</a></li>
        <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Usuarios</a></li>
       <li><a href="cerrarSesion.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Salir</a></li>
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
        <small>Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Master</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
  
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				
		</div>	
	</div>
	<div class="row">	
   <div class="caja caja-azul caja-xl max_ws"> 
        <div class="caja-body">   
		
		<h3>MANTENIMIENTO</h3><hr />
		
		<form method="post" action="mantenimiento-backend.php" id="frmData" method="POST">
			<table class="table table-bordered">
				<tr>
					<td><label for="codLb" class="text-negrita">Codigo</label></td>
					<td><input type="text" class="form-control" name="codigo" id="codigo" ></td>
          <input name="txtQhacer" id="txtQhacer" type="text" class="form-control display-none" placeholder="*****" >
				</tr>
				<tr>
					<td><label for="usuarioLb" class="text-negrita">Usuario</label></td>
					<td><input type="text" class="form-control" name="usuarioTxt" id="usuarioTxt" required></td>
				</tr>
				<tr>
					<td><label for="passLb" class="text-negrita">Contraseña</label></td>
					<td><input type="password" class="form-control" name="passwordTxt"  id="passwordTxt" required></td>
				</tr>
				<tr>
					<td><label for="nombresLb" class="text-negrita">Nombres</label></td>
					<td><input type="text" class="form-control" name="nombresTxt" id="nombresTxt" required>	</td>
				</tr>
				<tr>
					<td><label for="apellidosLb" class="text-negrita">Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidosTxt" id="apellidosTxt" required></td>
				</tr>
				<tr>
					<td><label for="correoLb" class="text-negrita">Correo</label></td>
					<td><input type="email" class="form-control" name="correoTxt" aria-describedby="emailHelp" id="correoTxt" required></td>
				</tr>
				<tr>
					<td><label for="tuLb" class="text-negrita">Tipo de Usuario</label></td>
					<td>
						<select name="tpUsuario" id="tpUsuario" class="form-control" >
							<option value="1">Admin Master</option>
							<option value="2">Admin Común</option>
						</select>
					</td>

				</tr>
			</table>	 
      <center>
       <button id="btnCrear" type="" class="btn btn-success ">Crear </button>
      <button id="btnEditar" type="" class="btn btn-primary ">Editar </button>
      <button id="btnEliminar" type="" class="btn btn-danger ">Eliminar </button>
      </center> 
		 
		</form>		
		
  </div>
</div>
     <div class="caja caja-rojo caja-xl "> 
        <div class="caja-body">		
		<table border="1" class="table table-bordered">
		<tr>
			<td class="text-negrita">Codigo</td>
			<td class="text-negrita">Usuario</td>
			<td class="text-negrita">Nombres</td>
			<td class="text-negrita">Apellidos</td>
			<td class="text-negrita">Correo</td>
			<td class="text-negrita">Tipo Usuarios</td>
				
		</tr>

		<?php 
		$conexion=mysqli_connect('localhost','root','','adminryr_db');
		$sql="SELECT * from usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['COD_USUARIO'] ?></td>
			<td class="UsBus pointer" data-id="<?php echo $mostrar['COD_USUARIO'] ?>"><?php echo $mostrar['USUARIO'] ?></td>
			<td><?php echo $mostrar['NOMBRES'] ?></td>
			<td><?php echo $mostrar['APELLIDOS'] ?></td>
			<td><?php echo $mostrar['CORREO'] ?></td>
			<td><?php echo $mostrar['TIPO_USUARIO'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
		</div>
  
</div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
 
	</body>
  <script src="../../dist/js/adminlte.min.js"></script>
  <script src="../../js/mostrarUsuario.js"></script>
	<script>
		$(".ponerUserName").text($("#AdmNameUser").text());
    $("#txtQhacer").val(1);

    $("body").on("click",".UsBus",function(){
        postUsuario($(this).data("id"));
        $("#codigo").val($(this).data("id"));
        $('body,html').animate({scrollTop : 0}, 500);
    });

    $("#btnCrear").on("click", function(e) {
       // e.preventDefault();
      $("#txtQhacer").val(1);
            if($("passwordTxt").val().length != 0 ){

       $('#frmData').submit();
      };
    });
    $("#btnEditar").on("click", function(e) {
       // e.preventDefault();
      $("#txtQhacer").val(2);
             if($("passwordTxt").val().length != 0 ){

       $('#frmData').submit();
      };
    });
    $("#btnEliminar").on("click", function(e) {
       // e.preventDefault();
      $("#txtQhacer").val(3);
      if($("passwordTxt").val().length != 0 ){

       $('#frmData').submit();
      };
    });
    $("#codigo").change(function(){
      // alert("entro"+);
    postUsuario($(this).val());
    });
	</script>
</html>