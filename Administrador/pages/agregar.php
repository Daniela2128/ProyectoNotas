<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h1>REGISTRO DE USUARIOS</h1>
        <div class="container">
            <div class="col-lg-6">
                <form action="../controladores/agregarusuarios.php" method="post">
                       Nombre:<br>
                    <input class="form-control" type="text" name="txtnombre"><br> 
                    Apellido:<br>
                    <input class="form-control" type="text" name="txtapellido"><br> 
                    Usuario:<br>
                    <input class="form-control" type="text" name="txtusuario"><br> 
                    Contraseña:<br>
                    <input class="form-control" type="password" name="txtpassword"><br> 
                    Perfil:
                    
                    <select name="txtperfil">
                    <option value="Docente">Docente</option>
                    <option value="Estudiante">Estudiante</option>
                     </select>
                     <br>
                    Estado:
                    
                    <select name="txtestado">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                     </select>
                     <br>
                     
                    <input class="btn btn-danger" type="submit" name="accion" value="Registrar"><br> 
                </form>
            </div>
        </div>
    </body>
</html>