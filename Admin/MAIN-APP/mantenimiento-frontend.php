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
  </head>
  <body>
  
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				
		</div>	
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>MANTENIMIENTO</h3><hr />
		
		<form method="post" action="mantenimiento-backend.php" method="POST">
			<table class="table table-bordered">
				<tr>
					<td><label for="codLb">Codigo</label></td>
					<td><input type="text" class="form-control" name="name"  required></td>
				</tr>
				<tr>
					<td><label for="usuarioLb">Usuario</label></td>
					<td><input type="text" class="form-control" name="name"  required></td>
				</tr>
				<tr>
					<td><label for="passLb">Contraseña</label></td>
					<td><input type="password" class="form-control" name="password" required></td>
				</tr>
				<tr>
					<td><label for="nombresLb">Nombres</label></td>
					<td><input type="text" class="form-control" name="name"  required>	</td>
				</tr>
				<tr>
					<td><label for="apellidosLb">Apellidos</label></td>
					<td><input type="text" class="form-control" name="name"  required></td>
				</tr>
				<tr>
					<td><label for="correoLb">Correo</label></td>
					<td><input type="email" class="form-control" name="email" aria-describedby="emailHelp"  required></td>
				</tr>
				<tr>
					<td><label for="tuLb">Tipo de Usuario</label></td>
					<td>
						<select name="tpUsuario" name="lista">
							<option value="admin">1</option>
							<option value="otro">2</option>
						</select>
					</td>

				</tr>
			</table>	  
		  <button type="submit" class="btn btn-success btn-block">Create </button>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>
</html>