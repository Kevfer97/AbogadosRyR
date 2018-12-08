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


 $sql = "SELECT * FROM usuarios where COD_USUARIO = '$id' ";

$Usuarios = Database::get_arreglo( $sql );


$respuesta = array(
			'error' => false,
			'Usuarios' => $Usuarios 
		);


 echo json_encode( $respuesta );


?>