<?php
// Incluir la clase de base de datos
include_once("../classes/class.Database.php");

$id = $_POST['id_noticia'];
$titulo = $_POST['txtnot_titulo']; 
$contenido =  $_POST['txtnot_contenido'];
$previa =  $_POST['txtnot_vista'];
$estado =  $_POST['ddlnot_estado'];
$relevante =  $_POST['ddlnot_relevante'];
$user =  $_POST['user_log'];
$link =  $_POST['txtnot_link'];
$desc =  $_POST['txtnot_desc'];
date_default_timezone_set('America/Mexico_City');
$fecha =  date("Y-m-d H:i:s"); 



//
if ( $id == 0){

$sql = "INSERT INTO `tbl_noticias`( `not_titulo`, `not_contendo`, `not_vista_previa`, `not_link`, `not_estado`, `not_usa_crea`, `not_fecha_crea`, `not_relevante`, `not_descarga` )  values ('$titulo','$contenido','$previa','$link','$estado','$user', '$fecha', '$relevante','$desc')";
}else{
 $sql = "UPDATE `tbl_noticias` SET `not_titulo`='$titulo',`not_contendo`='$contenido',`not_vista_previa`='$previa',`not_link`='$link',`not_estado`='$estado',`not_usa_mod`='$user',`not_fecha_mod`='$fecha',`not_relevante`='$relevante',`not_descarga`='$desc' where not_id = $id";
};

$hecho = Database::ejecutar_idu($sql);

if ($hecho){

$respuesta = json_encode( 

			array('err' => false, 
				  'mensaje' => "creado corectamente")
		);
	
}else{
	$respuesta = json_encode( 
				array('err' => true, 
				  'mensaje' => $hecho)
		);
	
}




echo $respuesta;



?>