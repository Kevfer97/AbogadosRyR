<?php
session_start();
$usuario = $_POST['usuarioTxt'];
$_SESSION['usuario']= $usuario;
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion='') {
	header('Location: ../index.php');
	die();

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Verificando Login</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>  
  <div class="container">
  
<?php

	include 'conexion.php';	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$usuario = $_POST['usuarioTxt']; 
	$contraseña = $_POST['passwordTxt'];
	
	$result = mysqli_query($conn, "SELECT CORREO, PASS, NOMBRES FROM USUARIOS WHERE CORREO = '$usuario'");
	
	$row = mysqli_fetch_assoc($result);
	
	$hash = $row['PASS'];
	

	if (password_verify($_POST['passwordTxt'], $hash)) {	
		
		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $row['NOMBRES'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
		
		echo "<div class='alert alert-success' role='alert'><strong>Welcome!</strong> $row[NOMBRES]			
		<p><a href='editar-perfil.php'>Editar Perfil</a></p>	
		<p><a href='mantenimiento-frontend.php'>Mantenimiento</a></p>
		<p><a href='cerrarSesion.php'>Cerrar Sesion</a></p></div>";	
	
	} else {
		header("location:../index.php?e=1");		
	}	
?>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>