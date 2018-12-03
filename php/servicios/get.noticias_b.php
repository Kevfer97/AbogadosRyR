<?php
// Incluir la clase de base de datos
include_once("../classes/class.Database.php");


$sql = "SELECT * FROM tbl_noticias where not_estado = 'A' ";

$noticia = Database::get_arreglo( $sql );


$respuesta = array(
			'error' => false,
			'noticia' => $noticia 
		);


 echo json_encode( $respuesta );


?>