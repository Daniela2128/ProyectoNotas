<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>EDITAR</title>
    </head>
    <body>
         <div class="container">
            <div class="col-lg-6">
     <h1>EDITAR ADMINISTRADOR</h1>
     
             <form action="../modelos/agregarusuarios">
                     Id:<br>
                    <input class="form-control" type="number" name="txtId" value="<%=ap.getid()%>"><br> 
                   Documento del aprendiz:<br>
                    <input class="form-control" type="number" name="txtdocu" value="<%=ap.getDocu()%>"><br> 
                    Nombre del aprendiz:<br>
                    <input class="form-control" type="text" name="txtnombreap" value="<%=ap.getNombreap()%>"><br> 
                    Apellido del aprendiz:<br>
                    <input class="form-control" type="text" name="txtapellidoap" value="<%=ap.getApellidoap()%>"><br> 
                    Correo del aprendiz:<br>
                    <input class="form-control" type="email" name="txtcorreoap" value="<%=ap.getCorreoap()%>"><br> 
                    Numero del aprendiz:<br>
                    <input class="form-control" type="number" name="txtteleap" value="<%=ap.getTeleap()%>">
                    <br> 
                    <input class="btn btn-danger" type="submit" name="accion" value="Actualizar"><br> 
    </form>
                
            </div>
            
        </div>
        
    </body>
</html>