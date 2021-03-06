<?php 
session_start();

// echo "usuario tipo:".$_SESSION['tipoUsuario'];


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
      
    } else {
        header("location:../../../index.html");
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

<a id="AdmEmailUser" class="display-none">
  <?php session_start(); echo $_SESSION['correo']; ?> </a>
<a id="AdmNameUser" class="display-none"><?php echo $_SESSION['nombres']; ?></a>
<a id="AdmCodigoUser" class="display-none"><?php echo $_SESSION['id']; ?></a>
<a id="AdmTipoUser" class="display-none"><?php echo $_SESSION['tipoUsuario']; ?></a>
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
         <li><a id="homeSegun" href="ADMIN/admMasterNot.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Inicio</a></li>
        <li class="active"><a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Cuenta</a></li>
        <li id="UserOcult" ><a href="mantenimiento-frontend.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Usuarios</a></li>
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
        <small>Contraseña</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Master</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      
    <div class="caja caja-azul caja-xl max_w"> 
        <div class="caja-body">
          <form class="form-horizontal" id="frmData" >
            <div class="row form-group">
              <div class="col-md-12">
                <h4><label class="ponerUserName"></label></h4>
                <input name="txtUserId" id="txtUserId" type="text" class="form-control display-none" placeholder="*****" >
              </div>
              
              <div class="col-md-12">
                <label >Contraseña Nueva</label>
                <input name="txtUserContraN1" id="txtUserContraN1" type="password" class="form-control" placeholder="*****" >
              </div>
              <div class="col-md-12">
                <label >Contraseña Nueva</label>
                <input name="txtUserContraN2" id="txtUserContraN2" type="password" class="form-control" placeholder="*****" >
              </div> 
              <div class="col-md-12"><br>
                <button id="btnGuardar" type="submit" class="btn btn-primary aling-right"><i class="fa fa-save"></i>  Guardar</button>
              </div>
            </div>  
          </form>

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
  
  <script src="../../dist/js/adminlte.min.js"></script>
   <script src="../../js/mostrarUsuario.js"></script>
  <script src="../../js/UpdateContraUser.js"></script>
  <script>
    
    if ($("#AdmTipoUser").text() == 2){
        $("#UserOcult").hide();
        $("#homeSegun").attr("href","USUARIO/admNoticias.php")
    };

    $(".ponerUserName").text($("#AdmNameUser").text());
    $("#txtUserId").val($("#AdmCodigoUser").text());
    $('#btnGuardar').click(function(e){
        e.preventDefault();
        if ($("#txtUserContraN1").val().length > 5 && $("#txtUserContraN2").val().length > 5  ){
          if($("#txtUserContraN1").val() == $("#txtUserContraN2").val()){
           $('#frmData').submit();        
           
          }else{
            alert("Las Contaseñas no Coinciden !!!");
          };
        }else{
            alert("Las Contaseña debe terner un Minimo de 6 Caracteres !!!");
          };
      
      });

  </script>
  </body>
</html>