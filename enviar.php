


<?php

$destino="ryr.abogadosycontadores@gmail.com";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$empresa=$_POST["empresa"];
$prioridad=$_REQUEST["prioridad"];
$asunto=$_REQUEST["asunto"];
$mensaje=$_REQUEST["comentario"];


$contenido="Nombre: ". $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nEmpresa: "
. $empresa . "\nPrioridad: ". $prioridad . "\nMensaje: " . $mensaje;
mail($destino, $asunto, $contenido);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contacto</title>
	<link rel="stylesheet" href="css/contacto.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	  <script src="datos.txt"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="js/menu.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="datos.js"></script>

</head>
<body>
	<div class="container">

		<form action="enviar.php" method="POST">
			<h2> Contáctese con nosotros</h2>
			<p class="intro">Agradecemos el interés por contactarse con nosotros, si desea recibir mayor informacion sobre algunons de nuestros servicios, por favor rellene el siguiente formulario y enseguida estaremos respondiendo. </p>
			<hr>

			<div class="row " >
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="text" name="nombre" placeholder="Nombre Completo" required>
					<input type="email" name="correo" placeholder="Email" required>
					<input type="text" name="telefono" placeholder="Ingrese su Telefono" required>
					<input type="text" name="empresa" placeholder="Empresa Opcional" >

					<p><label for="sel1">Selecione Prioridad :</label>
						<select class="form-control" name="prioridad" id="prioridad" required>
					    <option value="Urgente">Urgente</option>
					    <option value="Normal">Normal</option>
					    </select>
					</p>
					<p><label for="sel2">Selecione Asunto:</label>
						<select class="form-control" id="asunto" name="asunto" required>
					    <option value="Juridico">Juridico</option>
					    <option value="Contable">Contable</option>
					    <option value="empresa">Empresa</option>
					    <option value="persona_natural">Persona Natural</option>
					    <option value="servicios_contaduria">Servicios Contaduria</option>
					    <option value="elaboracion_declaraciones">Elaboración de Declaraciones</option>
					    <option value="actualizacion_Libros_Legales">Actualización de Libros Legales</option>
					    <option value="registroPublico">Registro Público</option>
					    <option value="servicios_auditoria">Servicios Auditoria</option>
					    <option value="asesorias_contables">Asesorías Contables</option>
					    <option value="asesorias_contables">Asesorías Contables</option>
					    <option value="procesos_civiles">Procesos Civiles</option>
					    <option value="mercantiles">Mercantiles</option>
					    <option value="familia_nines">Familia y Niñes</option>
					    <option value="laboral">Laboral</option>
					    <option value="admi">Administrativo</option>
					    <option value="transito">Transito</option>
 						<option value="tramites_notariales">Tramites Notariales</option>

					    </select>
					</p>
					<textarea name="comentario" placeholder="Escriba su mensaje aquí" required></textarea>
					<input type="submit" name="Enviar" value="Enviar" id="boton">
				</div>
				<div class="col-xs-12 col-sm-6 scol-md-6 c">

					<br>
					<p class="info">
					 Colonia y Pasaje Layco Casa # 1130 entre 29 Calle Poniente y 21 Avenida Norte.
					 Tel 2225-9119 y WhatsApp 7191-5293 7747-7871
					</p>
					<p class="info">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<img  width="100%" src="img/5.jpg" alt="rivacontacto">


					<!-- Mapa -->

				</div>
			</div>
				<a name="mapa">
				<div  id="map-container" class="map-container z-depth-1-half ">
					
				</a>

				</div>
			</div>

		</form>



	</div>



	<script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/footer.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/menu2.js" type="text/javascript" charset="utf-8" async defer></script>

    <!--Google Maps-->

<script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>


<script>

//mapa

$("#map-container").append(dato_mapa);




// funcion que retorna lo  capturado por la variable
  function $_GET(param) {
    var vars = {};
  window.location.href.replace( location.hash, '' ).replace(
    /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
    function( m, key, value ) { // callback
      vars[key] = value !== undefined ? value : '';
    }
  );

  if ( param ) {
    return vars[param] ? vars[param] : null;
  }
  return vars;
};

 var pri=" ";
 var asun= " "; 
 pri=$_GET("pri");
 asun=$_GET("asun");
$("#asunto").val(asun);

 if(pri=="n")
 {
 	console.log("entro al verdadero");
 	$("#prioridad").val("Normal");
 }
else
{
	console.log("entro al falso");
	$("#prioridad").val("Urgente");
}
</script>
</body>
</html>