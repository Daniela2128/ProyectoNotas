<?php
include_once('../../Conexion.php'); 
class Docentes extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}
	//inserta un usuario
	public function agregardoc($Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc){
		$sql= "SELECT * FROM docentes WHERE Usuariodoc='$Usuariodoc'";
        $resultado= $this->db->query($sql);
        if ($resultado->rowcount()>0){ 
            echo "usuario ya resgitrado";
            header('Location: ../pages/agregar.php');
        } else{


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
	}}
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
	public function getiddoc($id){
		$row = null;
        $statement= $this -> db -> prepare("SELECT * FROM docentes Where id_docente=:id");
        $statement -> bindParam(':id',$id);
        $statement -> execute();

        $resultado = $statement -> fetch(PDO:: FETCH_ASSOC);

        return $resultado;

        }
	//funcion para actualizar los datos del usuario
	public function updatedoc($id,$Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc){
		$statement=$this->db->prepare("UPDATE docentes SET id_docente=:id,Nombredoc=:Nombredoc, Apellidodoc=:Apellidodoc, Documentodoc=:Documentodoc,Correodoc=:Correodoc,Materiadoc=:Materiadoc, Usuariodoc=:Usuariodoc, Passworddoc=:Passworddoc, Perfil=:Perfil, Estadodoc=:Estadodoc WHERE id_docente=$id");
		$statement->bindParam(':id',$id);
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
	public function deletedoc($id){
        $statement=$this -> db -> prepare("DELETE  FROM docentes WHERE id_docente=:id");
        $statement->bindParam(':id',$id);
        if ($statement->execute()) {
            print "<script>alert('Docente eliminado'); window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('Docente no eliminado'); window.location='../pages/eliminar.php';</script>";
        }
    }

}
?>