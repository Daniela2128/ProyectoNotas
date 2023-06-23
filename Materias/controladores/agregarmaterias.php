<?php
require_once('../../Conexion.php');
require_once('../modelos/materias.php');
 if($_POST){
 	//crear un objeto de la clase materias
 	$mate = new Materias();
 	$Nombremate =$_POST['txtnombremate'];
 	
 	$doc->agregardoc($Nombremate);
 }

?>