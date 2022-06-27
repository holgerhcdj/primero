<?php 
require_once("Estudiantes.php");//INCLUYE LA CLASE ESTUDIANTES
$Estudiantes=new Estudiantes(); //cREA UNA NUEVA INSTANCIA DE LA CLASE
$datos=$_REQUEST; //CAPTURA LOS DATOS DEL FORMULARIO
//print_r($datos);
$Estudiantes->create($datos['est_nombres'],
	$datos['est_apellidos'],
	$datos['est_cedula'],
	$datos['est_ciudad'],
	$datos['est_edad'],
	$datos['est_genero']);
////****CÓDIGO PARA QUE SE REDIRECCIONE AL INDEX.PHP
header("location:lista_estudiantes.php");
?>