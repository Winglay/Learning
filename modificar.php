 <?php
	
$host = "localhost";
$username = "root";
$pass = "";
$database = "usuarios";

$conexion = mysqli_connect($host, $username, $pass, $database);


if (!$conexion) {
	echo "No se pudo conectar al servidor";
}
else
{
	$id = $_GET['id'];
	$nombre = !isset($_GET['nombre']) ? ""  : $_GET['nombre'];
	$apellido = !isset($_GET['apellido']) ? "" : $_GET['apellido'];
	$email = !isset($_GET['email']) ? "" : $_GET['email'];
	$telefono = !isset($_GET['telefono']) ?""  : $_GET['email'];




	$sql = "UPDATE usuariosdb SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono' WHERE id = '$id'";
	//si la conexion es exitosa, ejecutamos la consulta
	if ($conexion->query($sql) === TRUE) {
		echo "Entrada creada con exito";
	}else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
}

?>