<?php 
require_once("Estudiantes.php");//INCLUYE LA CLASE ESTUDIANTES
$Estudiantes=new Estudiantes(); //cREA UNA NUEVA INSTANCIA DE LA CLASE
$datos=$_REQUEST; //CAPTURA LOS DATOS DEL FORMULARIO
//die(print_r($datos));
if(empty($datos['est_id'])){ ///CREO UN NUEVO ESTUDIANTE

	$Estudiantes->create($datos['est_nombres'],
		$datos['est_apellidos'],
		$datos['est_cedula'],
		$datos['est_ciudad'],
		$datos['est_edad'],
		$datos['est_genero']);

}else{ ///MODIFICO EL ESTUDIANTE

	$Estudiantes->update($datos['est_nombres'],
		$datos['est_apellidos'],
		$datos['est_cedula'],
		$datos['est_ciudad'],
		$datos['est_edad'],
		$datos['est_genero'],$datos['est_id']);	

}

////****CÓDIGO PARA QUE SE REDIRECCIONE AL INDEX.PHP
header("location:lista_estudiantes.php");
?>