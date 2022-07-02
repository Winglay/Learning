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


	

	
	


	$sql = "DELETE FROM usuariosdb WHERE id = '$id'";
	//si la conexion es exitosa, ejecutamos la consulta
	if ($conexion->query($sql) === TRUE) {
		echo "Entrada creada con exito";
	}else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
}

?>