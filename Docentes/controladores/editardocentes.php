<?php
require_once('../../Conexion.php');
require_once('../modelos/docentes.php');

$doc = new Docentes();

$id = $_POST['id'];
$Nombredoc =$_POST['txtnombredoc'];
    $Apellidodoc =$_POST['txtapellidodoc'];
    $Documentodoc =$_POST['txtdocumentodoc'];
    $Correodoc =$_POST['txtcorreodoc'];
    $Materiadoc =$_POST['txtmateria'];
    $Usuariodoc =$_POST['txtusuariodoc'];
    $Passworddoc =MD5($_POST['txtcontraseñadoc']);
    $Perfil =$_POST['txtperfil'];
    $Estadodoc =$_POST['txtestadodoc'];

    $doc->updatedoc($id,$Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc);
 

?>