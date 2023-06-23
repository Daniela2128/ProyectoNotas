<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link  href="style.css" rel="stylesheet" type="text/css">
        <title>Registro</title>
    </head>
    <body>
        <h1>REGISTRO DE DOCENTES</h1>
        <div class="container">
            	<form action="../controladores/agregardocentes.php" method="post">
                	<div class="form-group">
                   	<label>Nombre:</label>
                    <input type="text" class="form-control" placeholder="Ingresar su nombre" name="txtnombredoc">
                	</div> 

                    <div class="form-group">
                    <label>Apellido:</label>
                    <input type="text" class="form-control" placeholder="Ingresar su apellido" name="txtapellidodoc">
                	</div>

                	<div class="form-group">
                    <label>Documento:</label>
                    <input type="text" class="form-control" placeholder="Ingresar su Documento" name="txtdocumentodoc">
                    </div>

                    <div class="form-group"> 
                    <label>Correo:</label>
                    <input type="email" class="form-control" placeholder="Ingresar su correo" name="txtcorreodoc">
                	</div>

                    <div class="form-group"> 
                    <label>Materia:</label>
                    <input type="text" class="form-control" placeholder="Ingrese la materia que dicta" name="txtmateria">
                    </div>

                    <div class="form-group">
                    <label>Usuario:</label>
                    <input type="text" class="form-control" placeholder="Ingresar su Usuario"  name="txtusuariodoc">
                    </div>

                    <div class="form-group"> 
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Ingresar su contraseña" name="txtcontraseñadoc">
                    </div>

                	<div class="form-group"> 
                    <p>Perfil:</p>
                    <label for="perfil"></label>
                    <select class="form-select" name="txtperfil" aria-label="Default select example">
                	<option selected>Elegir opcion</option>
                	<option value="Administrador">Administrador</option>
					<option value="Docente">Docente</option>
					<option value="Estudiante">Estudiante</option>
					</select>
					</div>
					
					<div class="form-group"> 
                    <p>Estado:</p>
                    <label for="estado"></label>
                    <select class="form-select" name="txtestado" aria-label="Default select example">
                	<option selected>Elegir opcion</option>
                	<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>
					</select>
					</div>
                    <input class="btn btn-danger" type="submit" name="accion" value="Registrar"><br> 
                </form>
            </div>
        </div>
    </body>
</html>