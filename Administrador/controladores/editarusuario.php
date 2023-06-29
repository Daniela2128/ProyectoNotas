<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');

$admin = new Administrador();

$id = $_POST['id'];
$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuariousu = $_POST['txtusuario'];
$Passwordusu = $_POST['txtpassword'];
$Perfil = $_POST['txtperfil'];
$Estado = $_POST['txtestado'];

$admin->updatead($id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estado);

?>