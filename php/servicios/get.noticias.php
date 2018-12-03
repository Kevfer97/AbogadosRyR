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


 if ( isset($_GET["pag"]) ) {
	$pag = $_GET['pag'];	
if( is_numeric( $pag ) ){

	}else{
			$pag =0;
	}
}else{
			$pag =0;
	}

	$pag = $pag * 10;

 $sql = "SELECT * FROM tbl_noticias where not_id = $id or  NULLIF ($id, 0 )is null  LIMIT $pag, 10";

$noticia = Database::get_arreglo( $sql );


$respuesta = array(
			'error' => false,
			'noticia' => $noticia 
		);


 echo json_encode( $respuesta );


?>