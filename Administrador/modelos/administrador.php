<?php
include_once('../../Conexion.php'); 
class Administrador extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}
	//inserta un usuario
	public function agregarad($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu){

		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombreusu,:Apellidousu,:Usuariousu,:Passwordusu,:Perfil,:Estadousu)");

		$statement->bindParam(':Nombreusu',$Nombreusu);
		$statement->bindParam(':Apellidousu',$Apellidousu);
		$statement->bindParam(':Usuariousu',$Usuariousu);
		$statement->bindParam(':Passwordusu',$Passwordusu);
		$statement->bindParam(':Perfil',$Perfil);
		$statement->bindParam(':Estadousu',$Estadousu);
		if($statement->execute()){
			echo "usuario registrado";
			header('Location: ../pages/index.php');
		}else{
			echo"no se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para seleccionar todos los usuarios con el rol administrador
	public function getad(){
		$row = null;
		$statement=$this->db->prepare("SELECT *FROM usuarios WHERE Perfil='Administrador'");
		$statement->execute();
		while ($resul=$statement->fetch()) {
			$row[]=$resul;
		}return $row;
	}
	//funcion para seleccionar un usuario por su id
	public function getidad($Id){
		$row=null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador' AND id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul=$statement->fetch()){
			$row[]=$resul;
		}return $row;
	}
	//funcion para actualizar los datos del usuario
	public function updatead($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estadousu){
		$statement=$this->db->prepare("UPDATE usuarios SET Nombreusu=:Nombread, Apellidousu=:Apellidoad,Usuario=:Usuarioad,Passwordusu=:Passwordad,Estado=:Estadousu WHERE id_usuario=$Id");
		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombreusu',$Nombreusu);
		$statement->bindParam(':Apellidousu',$Apellidousu);
		$statement->bindParam(':Usuariousu',$Usuariousu);
		$statement->bindParam(':Passwordusu',$Passwordusu);
		$statement->bindParam(':Perfil',$Perfil);
		$statement->bindParam(':Estadousu',$Estadousu);
		if($statement->execute()){
			echo "usuario actualizado";
			header('Location: ../pages/index.php');
		}else{
			echo "usuario no actualizado";
			header('Location: ../pages/editar.php');
		}

	}
	//funcion para elimiar un usuario
	public function deletead($Id){
		$statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) {
			echo "usuario eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "el usuario no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>