<?php
	require_once('../../Conexion.php');
	require_once('../modelos/docentes.php');

	$do= new Docentes();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['id'];
		$result=$do->deletedoc($id);
		if($result){
			print "<script>alert('Docente eliminado'); window.location='../pages/index.php';</script>";
		}else{
			print "<script>alert('Docente no eliminado'); window.location='../pages/eliminar.php';</script>";
		}
	}
?>