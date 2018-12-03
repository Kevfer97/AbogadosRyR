<?php
// Incluir la clase de base de datos
include_once("../classes/class.Database.php");

$por =  $_POST['ddl_BuscarPor'];
$estado =  $_POST['ddl_BuscarEstado'];
$fechaIni = $_POST['txtFecha_Inicio'];
$fechaFin = $_POST['txtFecha_Fin'];

if ( $estado == 0){

	$estado = " ";
}elseif ($estado == 1) {
	$estado = "A";
}else{
	$estado = "I";
};
if ($por == 0) {
	$por = "not_fecha_crea";
}else{
	$por = "not_fecha_mod";
}


 $sql = "SELECT * FROM tbl_noticias where (not_estado = '$estado' or  NULLIF ('$estado', ' ' )is null) and $por BETWEEN '$fechaIni' AND '$fechaFin' ";

$noticia = Database::get_arreglo( $sql );


$respuesta = array(
			'error' => false,
			'noticia' => $noticia 
		);


 echo json_encode( $respuesta );


?>