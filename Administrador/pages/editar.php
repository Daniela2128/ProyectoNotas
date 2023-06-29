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
require_once('../modelos/administrador.php');

$id = $_GET['id'];
$admin = new Administrador();
$row = $admin -> getidad($id);

if($row ){





?>


    <div class="content">
    <form action="../controladores/editarusuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">

    <h1> Editar Usuarios</h1>


    <div class="form-group">
        <label>Nombre</label>
        <input type= "text" name="txtnombre" placeholder= "Ingrese su Nombre" value="<?php echo $row['Nombreusu'] ?>" >

    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="txtapellido" placeholder="Ingrese su Apellido" value="<?php echo $row['Apellidousu'] ?>">
        
    </div>

    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="txtusuario" placeholder="Ingrese su Usuario" value="<?php echo $row['Usuario'] ?>">
        
    </div>

    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="txtpassword" placeholder="Ingrese su Contraseña" value="<?php echo $row['Passwordusu'] ?>">
        
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
        <select class="form-group" name="txtestado" value="<?php echo $row['Estado'] ?>">
            <option selected>Elegir opcion</option>
        <option value="Activo">Activo</option>
            <option value="No Activo">No Activo</option>
        </select>
    </div>

    <input type="submit"  class="btn btn-primary" name="actualizar" value="Actualizar">

    </form>
    <?php } ?>
    </div>
    
</body>
</html>