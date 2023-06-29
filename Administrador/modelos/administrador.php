<?php
include_once('../../Conexion.php'); 
class Administrador extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    //inserta un usuario
    public function agregarad($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu){
        $sql= "SELECT * FROM usuarios WHERE Usuario='$Usuariousu'";
        $resultado= $this->db->query($sql);
        if ($resultado->rowcount()>0){ 
            echo "usuario ya resgitrado";
            header('Location: ../pages/agregar.php');
        } else{



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
    }}
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
    public function getidad($id){
        $row = null;
        $statement= $this -> db -> prepare("SELECT * FROM usuarios Where id_usuario=:id");
        $statement -> bindParam(':id',$id);
        $statement -> execute();

        $resultado = $statement -> fetch(PDO:: FETCH_ASSOC);

        return $resultado;

        

        }
    //funcion para actualizar los datos del usuario
    public function updatead($id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu){
        $statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:id, Nombreusu=:Nombreusu, Apellidousu=:Apellidousu,Usuario=:Usuariousu,Passwordusu=:Passwordusu,Perfil=:Perfil,Estado=:Estadousu WHERE id_usuario=$id");
        $statement->bindParam(':id',$id);
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
    public function deletead($id){
        $statement=$this -> db -> prepare("DELETE  FROM usuarios WHERE id_usuario=:id");
        $statement->bindParam(':id',$id);
        if ($statement->execute()) {
            print "<script>alert('Usuario eliminado'); window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('Usuario no eliminado'); window.location='../pages/eliminar.php';</script>";
        }
    }
}
?>