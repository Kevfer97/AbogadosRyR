<?php
// Incluir la clase de base de datos
include_once("../classes/class.Database.php");

 if ( isset($_GET["id"]) ) {
	$id = $_GET['id'];	
if( is_numeric( $id ) ){

	}else{
			$id = 0;
	}
}else{
			$id = 0;
	}


 $sql = "DELETE FROM `tbl_noticias` WHERE  not_id = $id ";

$noticia = Database::get_arreglo( $sql );


$respuesta = array(
			'error' => false,
			'noticia' => $noticia 
		);


 echo json_encode( $respuesta );


?>