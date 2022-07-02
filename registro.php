<?php
$conexion=mysqli_connect("localhost","root","","usuarios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
<link rel="stylesheet" type="text/css" href="style.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar registros</title>
</head>
<body>
    


    <div>
    <table class="table table-hover table-dark colortabla" >
        <tr class="nombrecolumnas">
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Telefono</td>
        <td>Borrar</td>
         <td>Modificar</td>
        </tr>

        <?php $sql="SELECT  * FROM usuariosdb";
        $resultado=mysqli_query ($conexion,$sql);

        while ($mostrar = mysqli_fetch_array($resultado)) {

         ?>

        <tr>
            <td><?php echo $mostrar["id"] ?></td>
            <td><?php echo $mostrar["nombre"]?></td>
            <td><?php echo $mostrar["apellido"]?></td>
            <td><?php echo $mostrar["email"]?></td>
            <td><?php echo $mostrar["telefono"]?></td> 
            <td> <a  href="delete.php/?id=<?php echo $mostrar["id"] ?>"> <img  class="delete" src="borrar.png"></a> </td>  
            <td> <a  href="modificar_vista.php/?id=<?php echo $mostrar["id"] ?>"> <img  class="delete" src="modificar.png"></a> </td>  
    
        </tr>

        <?php  
    }?>
    </table>
    </div>
    
</body>
</html>