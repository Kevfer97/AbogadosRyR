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
	
	
	$id = $_POST['codigo'];	
	$usuario = $_POST['usuarioTxt'];
	$pass = $_POST['passwordTxt'];
	$nombres = $_POST['nombresTxt'];
	$apellidos = $_POST['apellidosTxt'];
	$correo = $_POST['correoTxt'];
	$tipoDeUsuario = $_POST['tpUsuario'];
	$txtQhacer = $_POST['txtQhacer']; 
	
	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	switch ($txtQhacer) {
    case 1:
    $checkEmail = "SELECT * FROM USUARIOS WHERE CORREO = '$_POST[correoTxt]' ";

	$result = $conn-> query($checkEmail);

	$count = mysqli_num_rows($result);
	if ($count==1) {
		echo "<script> alert('El correo ya existe !!'); </script>";
	}else {
		$query = "INSERT INTO USUARIOS (USUARIO,PASS, NOMBRES, APELLIDOS, CORREO, TIPO_USUARIO) VALUES ('$usuario','$passHash','$nombres','$apellidos', '$correo','$tipoDeUsuario')";

      if (mysqli_query($conn, $query)) {
		echo "<script> alert('Usuario Creado Corectamente'); </script>";
		header("location:mantenimiento-frontend.php");		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
	}
      
        break;
    case 2:
        $query ="UPDATE USUARIOS SET USUARIO='$usuario', PASS='$passHash', NOMBRES='$nombres', APELLIDOS ='$apellidos', CORREO ='$correo', TIPO_USUARIO='$tipoDeUsuario' WHERE COD_USUARIO='$id'";

        if (mysqli_query($conn, $query)) {
		echo "<script> alert('Usuario Actualizado Corectamente'); </script>";
		header("location:mantenimiento-frontend.php");		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
        break;
        break;
    case 3:
        $query= "DELETE FROM USUARIOS WHERE COD_USUARIO='$id'";

        if (mysqli_query($conn, $query)) {
		echo "<script> alert('Usuario Eliminado Corectamente'); </script>";
		header("location:mantenimiento-frontend.php");		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
        break;
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