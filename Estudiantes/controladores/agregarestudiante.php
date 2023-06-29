<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

if($_POST)
{
    //crear un objeto de clase estudiante

    $estu = new estudiantes();
    $Nombreest = $_POST['txtnombre'];
    $Apellidoest = $_POST['txtapellido'];
    $Documentoest = $_POST['txtdocumento'];
    $Correoest = $_POST['txtcorreo'];
    $Materia = $_POST['txtmateria'];
    $Docente = $_POST['txtdocente'];
    $Promedio = $_POST['txtpromedio'];
    $Fecha_registro = $_POST['txtfecha_registro'];

    $estu -> agregares($Nombreest, $Apellidoest, $Documentoest,$Correoest,$Materia,$Docente,$Promedio,$Fecha_registro);

}
?>

