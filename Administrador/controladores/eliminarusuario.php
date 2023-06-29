<?php
	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');

	$ad= new Administrador();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['id'];
		$result=$ad->deletead($id);
		if($result){
			print "<script>alert('Usuario eliminado'); window.location='../pages/index.php';</script>";
		}else{
			print "<script>alert('Usuario no eliminado'); window.location='../pages/eliminar.php';</script>";
		}
	}
?>