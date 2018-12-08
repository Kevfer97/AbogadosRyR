<?php 
session_start();
$usuario=$_SESSION['usuario'];
error_reporting(0);
include 'conexion.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$tipoUsuario = mysqli_query($conn,"SELECT TIPO_USUARIOS FROM USUARIOS WHERE CORREO = '$usuario'");
$row = mysqli_fetch_array($tipoUsuario);
echo "tipo: ".$row[0];
if($row[0]=='2'){
	echo "usted no tiene permisos";
	die();
}
 ?>
<!doctype html>

<html lang="en">
  <head>
    <title>Mantenimiento</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom.css">

		  	<link rel="icon" type="image/png" href="../../img/icono.png" />
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="../../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/lib/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- importacion de TimelineMax para las animaciones -->
	<script src="../../js/lib/TweenMax.min.js"></script>
	<!-- importacio de la libreria del editor de texto -->
	<script src="../../ckeditor/ckeditor.js"></script>

  </head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="modal-sombra"></div>

<!-- Josue aqui quiero los Datos del ususario dentro de las etiquetas  -->
<a id="AdmNameUser" class="display-none">Kevin Melendez</a>
<a id="AdmEmailUser" class="display-none">Kevin.Melendez@RyR.com</a>
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
         <li><a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Inicio</a></li>
        <li ><a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Cuenta</a></li>
        <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Usuarios</a></li>
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
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>MANTENIMIENTO</h3><hr />
		
		<form method="post" action="mantenimiento-backend.php" id="frmData" method="POST">
			<table class="table table-bordered">
				<tr>
					<td><label for="codLb">Codigo</label></td>
					<td><input type="text" class="form-control" name="codigo"  ></td>
          <input name="txtQhacer" id="txtQhacer" type="text" class="form-control display-none" placeholder="*****" >
				</tr>
				<tr>
					<td><label for="usuarioLb">Usuario</label></td>
					<td><input type="text" class="form-control" name="usuarioTxt"  required></td>
				</tr>
				<tr>
					<td><label for="passLb">Contraseña</label></td>
					<td><input type="password" class="form-control" name="passwordTxt" required></td>
				</tr>
				<tr>
					<td><label for="nombresLb">Nombres</label></td>
					<td><input type="text" class="form-control" name="nombresTxt"  required>	</td>
				</tr>
				<tr>
					<td><label for="apellidosLb">Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidosTxt"  required></td>
				</tr>
				<tr>
					<td><label for="correoLb">Correo</label></td>
					<td><input type="email" class="form-control" name="correoTxt" aria-describedby="emailHelp"  required></td>
				</tr>
				<tr>
					<td><label for="tuLb">Tipo de Usuario</label></td>
					<td>
						<select name="tpUsuario" class="form-control" name="lista">
							<option value="1">Admin Master</option>
							<option value="2">Admin Común</option>
						</select>
					</td>

				</tr>
			</table>	  
		  <button id="btnCrear" type="submit" class="btn btn-success btn-block">Crear </button>
      <button id="btnEditar" type="submit" class="btn btn-warning btn-block">Editar </button>
      <button id="btnEliminar" type="submit" class="btn btn-danger btn-block">Eliminar </button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
		<table border="1" class="table table-bordered">
		<tr>
			<td>Codigo</td>
			<td>Usuario</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Correo</td>
			<td>Tipo Usuarios</td>
				
		</tr>

		<?php 
		$conexion=mysqli_connect('localhost','root','','abogados');
		$sql="SELECT * from usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['COD_USUARIO'] ?></td>
			<td><?php echo $mostrar['USUARIO'] ?></td>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>
	<script>
		$(".ponerUserName").text($("#AdmNameUser").text());
    $("#txtQhacer").val(1);

    $("#btnCrear").on("click", function(e) {
       e.preventDefault();
      $("#txtQhacer").val(1);
      $('#frmData').submit();
    });
    $("#Editar").on("click", function(e) {
       e.preventDefault();
      $("#txtQhacer").val(2);
      $('#frmData').submit();
    });
    $("#btnEliminar").on("click", function(e) {
       e.preventDefault();
      $("#txtQhacer").val(3);
      $('#frmData').submit();
    });

	</script>
</html>