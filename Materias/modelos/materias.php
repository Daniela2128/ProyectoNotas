<?php 
include_once('../../Conexion.php');
class materias extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function agregarmat($Nombremat){
        $statement = $this->db->prepare("INSERT INTO usuarios(Nombreest,Apellidoest,Documento,Correo,Materia,Docente,Promedio,Fecha_registro)values(:Nombrees,:Apellidoes,:Documentoes,:Correoes,:Docentees,:Promedioes,:Fechareges)");
        
        $statement->bindParam(":Nombremat",$Nombremat);

        if($statement->execute()){
            echo"Materia registrada";
            header('Location: ../Pages/index.php');
        }else
        {
            echo "No se puede realizar el registro";
            header('Location: ../Pages.agregar.php');
        }
        
    
    }

    //funcion para seleccionar todos las materias
    public function getmat(){
        $row = null;
        $statement=$this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while($resul=$statement->fetch())
        {
            $row[]=$resul;
        }
        return $row;
    }
    //funcion para seleccionar una materia por su id
    public function getides($Id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM materias WHERE id_materia=:Id");
        $statement->bindParam(':Id',$Id);
        $statement->execute();
        while($resul=$statement->fetch()){
            $row[]=$resul;
        }return $row;
    }
    //funcion para actualizar los datos del usuario
    public function updatees($Id,$Nombremat)
    {
        $statement=$this->db->prepare("UPDATE materias SET Nombremate=:Nombremat");
        $statement->bindParam(':Id',$Id);
        $statement->bindParam(":Nombremat",$Nombremat);

        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //funcion para eliminar un usuario
    public function deletead($Id)
    {
        $statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=:Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute())
        {
echo "Materia eliminada";
header('Location: ../pages/index.php');

        }else{
            echo "La materia no se pudo eliminar";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>