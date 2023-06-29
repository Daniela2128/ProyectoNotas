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
require_once('../modelos/docentes.php');

$id = $_GET['id'];
$doc = new Docentes();
$row = $doc -> getiddoc($id);

if($row ){


}


?>


    <div class="content">
    <form action="../controladores/editardocentes.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">

    <h1> Editar Docentes</h1>


    <div class="form-group">
        <label>Nombre</label>
        <input type= "text" name="txtnombredoc" placeholder= "Ingrese su Nombre" value="<?php echo $row['Nombredoc'] ?>" >

    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="txtapellidodoc" placeholder="Ingrese su Apellido" value="<?php echo $row['Apellidodoc'] ?>">
        
    </div>

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="txtdocumentodoc" placeholder="Ingrese su Documento" value="<?php echo $row['Documentodoc'] ?>">
        
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="txtcorreodoc" placeholder="Ingrese su correo" value="<?php echo $row['Correodoc'] ?>">
        
    </div>
     <div class="form-group">
        <label>Materia</label>
        <input type="text" name="txtmateria" placeholder="Ingrese la materia" value="<?php echo $row['Materiadoc'] ?>">
        
    </div>
     <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="txtusuariodoc" placeholder="Ingrese su Usuario" value="<?php echo $row['Usuariodoc'] ?>">
        
    </div>
     <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="txtpassworddoc" placeholder="Ingrese su correo" value="<?php echo $row['Passworddoc'] ?>">
        
    </div>
    <div class="form-group">
        <label>Perfil:</label>
        <select class="form-group" name="txtperfil" value = "<?php echo $row['Perfil'] ?>">
            <option value="Administrador">Administrador</option>
            <option value="Docente">Docente</option>
        </select>
    </div>

    <div class="form-group">
        <label>Estado:</label>
        <select class="form-group" name="txtestadodoc" value="<?php echo $row['Estadodoc'] ?>">
            <option selected>Elegir opcion</option>
        <option value="Activo">Activo</option>
            <option value="No Activo">No Activo</option>
        </select>
    </div>

    <input type="submit"  class="btn btn-primary" name="actualizar" value="Actualizar">

    </form>
    </div>
    
</body>
</html>