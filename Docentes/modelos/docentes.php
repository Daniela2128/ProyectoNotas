<?php
include_once('../../Conexion.php'); 
class Docentes extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}
	//inserta un usuario
	public function agregardoc($Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc){

		$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)values(:Nombredoc,:Apellidodoc,:Documentodoc,:Correodoc,:Materiadoc,:Usuariodoc,:Passworddoc,:Perfil,:Estadodoc)");

		$statement->bindParam(":Nombredoc",$Nombredoc);
		$statement->bindParam(":Apellidodoc",$Apellidodoc);
		$statement->bindParam(":Documentodoc",$Documentodoc);
		$statement->bindParam(":Correodoc",$Correodoc);
		$statement->bindParam(":Materiadoc",$Materiadoc);
		$statement->bindParam(":Usuariodoc",$Usuariodoc);
		$statement->bindParam(":Passworddoc",$Passworddoc);
		$statement->bindParam(":Perfil",$Perfil);
		$statement->bindParam(":Estadodoc",$Estadodoc);
		if($statement->execute()){
			echo "docente registrado";
			header('Location: ../pages/index.php');
		}else{
			echo"no se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para seleccionar todos los usuarios con el rol administrador
	public function getdoc(){
		$row = null;
		$statement=$this->db->prepare("SELECT *FROM docentes");
		$statement->execute();
		while ($resul=$statement->fetch()) {
			$row[]=$resul;
		}return $row;
	}
	//funcion para seleccionar un usuario por su id
	public function getiddoc($Id){
		$row=null;
		$statement=$this->db->prepare("SELECT * FROM docentes AND id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul=$statement->fetch()){
			$row[]=$resul;
		}return $row;
	}
	//funcion para actualizar los datos del usuario
	public function updatead($Id,$Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc){
		$statement=$this->db->prepare("UPDATE docentes Nombredoc=:Nombredoc, Apellidodoc=:Apellidodoc, Documentodoc=:Documentodoc,Correodoc=:Correodco,Materiadoc=:Materiadoc, Usuariodoc=:Usuariodoc, Passworddoc=:Passworddoc, Perfil=:Perfil, Estadodoc=:Estadodoc WHERE id_docente=$Id");
		$statement->bindParam(':Id',$Id);
		$statement->bindParam(":Nombredoc",$Nombredoc);
		$statement->bindParam(":Apellidodoc",$Apellidodoc);
		$statement->bindParam(":Documentodoc",$Documentodoc);
		$statement->bindParam(":Correodoc",$Correodoc);
		$statement->bindParam(":Materiadoc",$Materiadoc);
		$statement->bindParam(":Usuariodoc",$Usuariodoc);
		$statement->bindParam(":Passworddoc",$Passworddoc);
		$statement->bindParam(":Perfil",$Perfil);
		$statement->bindParam(":Estadodoc",$Estadodoc);
		if($statement->execute()){
			echo "docente actualizado";
			header('Location: ../pages/index.php');
		}else{
			echo "docente no actualizado";
			header('Location: ../pages/editar.php');
		}

	}
	//funcion para elimiar un usuario
	public function deletedoc($Id){
		$statement=$this->db->prepare("DELETE * FROM docentes WHERE id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) {
			echo "docente eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "el docente no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>