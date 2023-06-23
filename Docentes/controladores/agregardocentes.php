<?php
require_once('../../Conexion.php');
require_once('../modelos/docentes.php');
 if($_POST){
 	//crear un objeto de la clase docentes
 	$doc = new Docentes();
 	$Nombredoc =$_POST['txtnombredoc'];
 	$Apellidodoc =$_POST['txtapellidodoc'];
 	$Documentodoc =$_POST['txtdocumentodoc'];
   $Correodoc =$_POST['txtcorreodoc'];
   $Materiadoc =$_POST['txtmateria'];
   $Usuariodoc =$_POST['txtusuariodoc'];
 	$Passworddoc =MD5($_POST['txtcontraseñadoc']);
 	$Perfil =$_POST['txtperfil'];
 	$Estadodoc =$_POST['txtestado'];

 	$doc->agregardoc($Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc);
 }

?>