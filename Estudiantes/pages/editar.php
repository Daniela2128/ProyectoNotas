<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Administrador/CSS/css.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Registrar Usuario</title>
</head>
<body>
<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

$id = $_GET['id'];
$est = new estudiantes();
$row = $est -> getides($id);

if($row ){


}


?>


    <div class="content">
    <form action="../controladores/editarestudiantes.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">

    <h1> Editar Estudiantes</h1>


    <div class="form-group">
        <label>Nombre</label>
        <input type= "text" name="txtnombreest" placeholder= "Ingrese su Nombre" value="<?php echo $row['Nombreest'] ?>" >

    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="txtapellidoest" placeholder="Ingrese su Apellido" value="<?php echo $row['Apellidoest'] ?>">
        
    </div>

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="txtdocumentoest" placeholder="Ingrese su Documento" value="<?php echo $row['Documentoest'] ?>">
        
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="txtcorreoest" placeholder="Ingrese su correo" value="<?php echo $row['Correoest'] ?>">
        
    </div>
     <div class="form-group"> 
                    <p>Materia:</p>
                    <label for="perfil"></label>
                    <select class="form-select" name="txtmateria" aria-label="Default select example">
                    <option selected>Elegir opcion</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Docente">Docente</option>
                    <option value="Estudiante">Estudiante</option>
                    </select>
                    </div>
      <div class="form-group"> 
                    <p>Docente:</p>
                    <label for="perfil"></label>
                    <select class="form-select" name="txtperfil" aria-label="Default select example">
                    <option selected>Elegir opcion</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Docente">Docente</option>
                    <option value="Estudiante">Estudiante</option>
                    </select>
                    </div>
     <div class="form-group">
        <label>Promedio</label>
        <input type="number" name="txtpromedio" placeholder="Ingrese su Promedio" value="<?php echo $row['Promedio'] ?>">
        
    </div>
    Fecha de registro:<br>
                    <input class="form-control" type="date" name="txtfecha_registro"><br>  
    

    <input type="submit"  class="btn btn-primary" name="actualizar" value="Actualizar">

    </form>
    </div>
    
</body>
</html>