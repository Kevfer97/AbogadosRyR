<?php
// Incluir la clase de base de datos
include_once("../classes/class.Database.php");



$contraN =  $_POST['txtUserContraN2'];
$id = $_POST['txtUserId'];


$passHash = password_hash($contraN, PASSWORD_DEFAULT);

 	$sql = "UPDATE `usuarios` SET `PASS`='$passHash' WHERE  COD_USUARIO = '$id'  ";


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