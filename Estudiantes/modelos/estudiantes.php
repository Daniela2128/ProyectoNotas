<?php 
include_once('../../Conexion.php');
class estudiantes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function agregares($Nombrees,$Apellidoes,$Documentoes,$Correoes,$Materiaes,$Docentees,$Promedioes,$Fechareges){
        $statement = $this->db->prepare("INSERT INTO usuarios(Nombreest,Apellidoest,Documento,Correo,Materia,Docente,Promedio,Fecha_registro)values(:Nombrees,:Apellidoes,:Documentoes,:Correoes,:Docentees,:Promedioes,:Fechareges)");
        
        $statement->bindParam(":Nombrees",$Nombrees);
        $statement->bindParam(":Apellidoes",$Apellidoes);
        $statement->bindParam(":Documentoes",$Documentoes);
        $statement->bindParam(":Correoes",$Correoes);
        $statement->bindParam(":Materiaes",$Materiaes);
        $statement->bindParam(":Docentees",$Docentees);
        $statement->bindParam(":Promedioes",$Promedioes);
        $statement->bindParam(":Fechareges",$Fechareges);
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
    public function getides($Id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_estudiante=:Id");
        $statement->bindParam(':Id',$Id);
        $statement->execute();
        while($resul=$statement->fetch()){
            $row[]=$resul;
        }return $row;
    }
    //funcion para actualizar los datos del usuario
    public function updatees($Id,$Nombrees,$Apellidoes,$Documentoes,$Correoes,$Materiaes,$Docentees,$Promedioes,$Fechareges)
    {
        $statement=$this->db->prepare("UPDATE usuarios SET Nombreest=:Nombrees,Apellidoest=:Apellidoes,Documento=:Documentoes, Correo=:Correoes, Materia=:Materiaes,Docente=:Docentees, Promedio=:Promedioes, Fecha_registro=:Fechareges");
        $statement->bindParam(':Id',$Id);
        $statement->bindParam(":Nombrees",$Nombrees);
        $statement->bindParam(":Apellidoes",$Apellidoes);
        $statement->bindParam(":Documentoes",$Documentoes);
        $statement->bindParam(":Correoes",$Correoes);
        $statement->bindParam(":Materiaes",$Materiaes);
        $statement->bindParam(":Docentees",$Docentees);
        $statement->bindParam(":Promedioes",$Promedioes);
        $statement->bindParam(":Fechareges",$Fechareges);
        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //funcion para eliminar un usuario
    public function deletead($Id)
    {
        $statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_estudiante=:Id");
        $statement->bindParam(':Id',$Id);
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