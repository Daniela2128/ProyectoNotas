<?php 
include_once('../../Conexion.php');
class materias extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function agregarmat($Nombremate){
        $statement = $this->db->prepare("INSERT INTO materias(Nombremate)values(:Nombremate)");
        
        $statement->bindParam(":Nombremate",$Nombremate);

        if($statement->execute()){
            echo"Materia registrada";
            header('Location: ../pages/index.php');
        }else
        {
            echo "No se puede realizar el registro";
            header('Location: ../pages.agregar.php');
        }
        
    
    }

    //funcion para seleccionar todos las materias
    public function getmate(){
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
    public function getidmate($id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM materias WHERE id_materia=:id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($resul=$statement->fetch()){
            $row[]=$resul;
        }return $row;
    }
    //funcion para actualizar los datos del usuario
    public function updatemate($id,$Nombremate)
    {
        $statement=$this->db->prepare("UPDATE materias SET Nombremate=:Nombremat");
        $statement->bindParam(':id',$id);
        $statement->bindParam(":Nombremate",$Nombremae);

        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //funcion para eliminar un usuario
    public function deletemate($id)
    {
        $statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=:id");
        $statement->bindParam(':id',$id);
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