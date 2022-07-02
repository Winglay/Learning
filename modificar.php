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
	$id = $_POST['id'];
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];




	$sql = "UPDATE usuariosdb SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono' WHERE id = '$id'";
	//si la conexion es exitosa, ejecutamos la consulta
	if ($conexion->query($sql) === TRUE) {
		echo "Entrada creada con exito";
	}else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
}

?>