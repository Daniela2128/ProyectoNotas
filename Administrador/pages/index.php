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

    <h1 style= "color: blue; text-align: center;">LISTADO DE USUARIOS</h1>

    <div col="col-aut-mt-5">

    <table class="table table-dark table-hover">
        <tr>

        <th>ID USUARIO</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>USUARIO</th>
        <th>PERFIL</th>
        <th>ESTADO</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
           

        </tr>
        <tbody>

        <?php

        require_once('../../Conexion.php');
        require_once('../modelos/administrador.php');

        //crear objeto para acceder a las funciones

        $obj = new Administrador();
        $datos = $obj -> getad();

        
        foreach($datos as $datos  ){
            
            ?>


        

        <tr>

        <td><?php echo $datos['id_usuario'] ?></td>
        <td><?php echo $datos['Nombreusu'] ?></td>
        <td><?php echo $datos['Apellidousu'] ?></td>
        <td><?php echo $datos['Usuario'] ?></td>
        <td><?php echo $datos['Perfil'] ?></td>
        <td><?php echo $datos['Estado'] ?></td>

        <td><a href="editar.php?id=<?php echo $datos['id_usuario'] ?>" class="btn btn-success">ACTUALIZAR</a></td>
        <td><a href="eliminar.php?id=<?php echo $datos['id_usuario'] ?>" class="btn btn-success">ELIMINAR</a></td>

        </tr>

        <?php } ?>


        </tbody>




    </table>

    </div>

</div>


</body>
</html>