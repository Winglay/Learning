
<?php
$conexion=mysqli_connect("localhost","root","","usuarios");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning</title>
	 <link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<body>

	<h1 id="titulo">DATOS</h1>

	<div >
		<form method="POST" action="modificar.php">

	  <?php 
		
  $sql = "SELECT  * FROM usuariosdb WHERE id='$id'";
        $resultado = mysqli_query ($conexion,$sql);
        $mostrar = mysqli_fetch_assoc($resultado);
        
         ?>
			<label for="exampleInputEmail1" class="form-label">Nombre</label>
			<input type="text" class="form-control"  name="nombre" value="<?php echo $mostrar["nombre"];?>"	>
	 		<br>
			<label for="exampleInputEmail1" class="form-label">Apellido</label>
			<input type="text" class="form-control"   name="apellido" value="<?php echo $mostrar["apellido"];?>">
	 		<br>
	 		<label for="exampleInputEmail1" class="form-label">Direccion de email</label>
			<input type="email" class="form-control"   name="email" value="<?php echo $mostrar["email"];?>">
	 		<br>
	 		<label for="exampleInputEmail1" class="form-label">Telefono</label>
			<input type="text" class="form-control"  name="telefono" value="<?php echo $mostrar["telefono"];?>">
	  		<br>
	 		<input type="submit" value="Enviar">
	 		<input type="hidden" name="id" value="<?php echo $mostrar["id"]; ?>">

			
		</form>
	</div>
</body>
</html>