<?php 
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create account on database</title>
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
	
	$checkEmail = "SELECT * FROM USUARIOS WHERE CORREO = '$_POST[correoTxt]' ";

	$result = $conn-> query($checkEmail);

	$count = mysqli_num_rows($result);

	if ($count == 1) {
	echo "<br />". "That email is already in our database." . "<br />";

	echo "<a href='../index.php'>Please Retrive your Password here</a>.";
	} else {	
	$usuario = $_POST['usuarioTxt'];
	$pass = $_POST['passwordTxt'];
	$nombres = $_POST['nombresTxt'];
	$apellidos = $_POST['apellidosTxt'];
	$correo = $_POST['correoTxt'];
	$tipoDeUsuario = $_POST['tpUsuario'];

	
	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO USUARIOS (USUARIO,PASS, NOMBRES, APELLIDOS, CORREO, TIPO_USUARIO) VALUES ('$usuario','$passHash','$nombres','$apellidos', '$correo','$tipoDeUsuario')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success' role='alert'><h3>Your account has been created.</h3>
		<a class='btn btn-outline-primary' href='../index.php' role='button'>Login</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>
	
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>