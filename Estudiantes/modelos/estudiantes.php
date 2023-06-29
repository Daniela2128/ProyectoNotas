<?php 
include_once('../../Conexion.php');
class estudiantes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function agregares($Nombreest,$Apellidoest,$Documentoest,$Correoest,$Materia,$Docente,$Promedio,$Fecha_registro){
        $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreest,Apellidoest,Documentoest,Correoest,Materia,Docente,Promedio,Fecha_registro)values(:Nombreest,:Apellidoest,:Documentoest,:Correoest,:Materia,:Docente,:Promedio,:Fecha_registro)");
        
        $statement->bindParam(":Nombreest",$Nombreest);
        $statement->bindParam(":Apellidoest",$Apellidoest);
        $statement->bindParam(":Documentoest",$Documentoest);
        $statement->bindParam(":Correoest",$Correoest);
        $statement->bindParam(":Materia",$Materia);
        $statement->bindParam(":Docente",$Docente);
        $statement->bindParam(":Promedio",$Promedio);
        $statement->bindParam(":Fecha_registro",$Fecha_registro);
        if($statement->execute()){
            echo"Estudiante registrado";
            header('Location: ../Pages/index.php');
        }else
        {
            echo "No se puede realizar el registro";
            header('Location: ../Pages.agregar.php');
        }
        
    
    }

    //funcion para seleccionar todos los usuarios con el rol estudiante
    public function getes(){
        $row = null;
        $statement=$this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        while($resul=$statement->fetch())
        {
            $row[]=$resul;
        }
        return $row;
    }
    //funcion para seleccionar un usuario por su id
    public function getides($id){
        $row = null;
        $statement= $this -> db -> prepare("SELECT * FROM estudiantes Where id_estudiante=:id");
        $statement -> bindParam(':id',$id);
        $statement -> execute();

        $resultado = $statement -> fetch(PDO:: FETCH_ASSOC);

        return $resultado;

        }
    //funcion para actualizar los datos del usuario
    public function updatees($id,$Nombreest,$Apellidoest,$Documentoest,$Correoest,$Materia,$Docente,$Promedio,$Fecha_registro)
    {
        $statement=$this->db->prepare("UPDATE usuarios SET id_estudiante=:id,Nombreest=:Nombreest,Apellidoest=:Apellidoest,Documentoest=:Documentoest, Correoest=:Correoest, Materia=:Materia,Docente=:Docente, Promedio=:Promedio, Fecha_registro=:Fecha_registro");
        $statement->bindParam(':id',$id);
        $statement->bindParam(":Nombreest",$Nombreest);
        $statement->bindParam(":Apellidoest",$Apellidoest);
        $statement->bindParam(":Documentoest",$Documentoest);
        $statement->bindParam(":Correoest",$Correoest);
        $statement->bindParam(":Materia",$Materia);
        $statement->bindParam(":Docente",$Docente);
        $statement->bindParam(":Promedio",$Promedio);
        $statement->bindParam(":Fecha_registro",$Fecha_registro);
        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //funcion para eliminar un usuario
    public function deletead($id)
    {
        $statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_estudiante=:id");
        $statement->bindParam(':id',$id);
        if($statement->execute())
        {
echo "Estudiante eliminado";
header('Location: ../pages/index.php');

        }else{
            echo "El estudiante no se pudo eliminar";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>