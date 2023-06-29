<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Gestion</title>
</head>
<body>
    
<div class= "container">

    <h1 style= "color: blue; text-align: center;">ELIMINAR USUARIO</h1>

    <div col="col-aut-mt-5">

    <table class="table table-dark table-hover">
      

        </tbody>
	<?php
	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');
	$admin = new Administrador();
	$id= $_GET['id'];
	?>
	<form action="../controladores/eliminarusuario.php" method="POST">
	<label>ID USUARIO:</label>
	<input type="number" class="form-control" name="id" placeholder="Ingresar el id a eliminar">
	<br>
	<br>
	<input type="submit" name="btn btn-primary" value="Eliminar">
	</form>


    </table>

    </div>

</div>


</body>
</html>