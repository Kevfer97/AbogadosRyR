<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
	<link rel="icon" type="image/png" href="../img/icono.png" />
</head>
<body>
	<div class="error">
		<span>Datos de Ingreso no validos, intentalo de nuevo</span>
	</div>
	<div class="main">
		<form id="formlg" method="POST" action="./MAIN-APP/verificar-login.php" >
			<input type="text" name="usuarioTxt" placeholder="Usuario" required/>
			<input type="password" name="passwordTxt" placeholder="Contraseña" required/>
			<input type="submit" class="botonlg" value="Iniciar Sesion" />
		</form>
		
	</div>

	
	<script src="../js/main.js"></script>
	<script>
		
		var e = $_GET('e');

		console.log(e);
		if ( e == 1){
			alert("Usuario o Contraseña erroneos!");
		}
	</script>
</body>
</html>