<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');

if($_POST)
{
    //crear un objeto de clase administrador 

    $admin = new administrador();
    $Nombreusu = $_POST['txtnombre'];
    $Apellidousu = $_POST['txtapellido'];
    $Usuariousu = $_POST['txtusuario'];
    $Passwordusu = MD5($_POST['txtpassword']);
    $Perfilusu = $_POST['txtperfil'];
    $Estadousu = $_POST['txtestado'];

    $admin -> agregarad($Nombreusu, $Apellidousu, $Usuariousu,$Passwordusu,$Perfilusu,$Estadousu);

}
?>