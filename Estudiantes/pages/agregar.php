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
        <h1>REGISTRO DE ESTUDIANTES</h1>
        <div class="container">
            <div class="col-lg-6">
                <form action="../controladores/agregarestudiante.php" method="post">
                      Nombre estudiante:<br>
                    <input class="form-control" type="text" name="txtnombre"><br> 
                    Apellido estudiante:<br>
                    <input class="form-control" type="text" name="txtapellido"><br> 
                    Documento estudiante:<br>
                    <input class="form-control" type="number" name="txtdocumento"><br>
                    Correo electronico:<br>
                    <input class="form-control" type="email" name="txtcorreo"><br>  
                    Materia:<br>
                    <input class="form-control" type="text" name="txtmateria"><br>  
                    Docente:<br>
                    <input class="form-control" type="text" name="txtdocente"><br>  
                    Promedio:<br>
                    <input class="form-control" type="text" name="txtpromedio"><br>  
                    Fecha de registro:<br>
                    <input class="form-control" type="date" name="txtfecha_registro"><br> 
                   
                    
                     
                    <input class="btn btn-danger" type="submit" name="accion" value="Registrar"><br> 
                </form>
            </div>
        </div>
    </body>
</html>
    