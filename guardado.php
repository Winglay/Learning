<?php

$host = "localhost";
$username = "root";
$pass = "";
$database = "usuarios";

$conexion = mysqli_connect($host, $username, $pass, $database);


if (!$conexion) {
	echo "No se pudo conectar al servidor";
}
else{
	$nombre = $_POST["inombre"];
	$apellido = $_POST["iapellido"];
	$email = $_POST["iemail"];
	$telefono = $_POST["itelefono"];
	
	if (is_null($nombre)) {
		echo "Debe poner el nombre";

		// code...
	}
	else
		

	$sql = "INSERT INTO usuariosdb (nombre,apellido,email,telefono) VALUES ('$nombre','$apellido','$email','$telefono')";
	//si la conexion es exitosa, ejecutamos la consulta
	if ($conexion->query($sql) === TRUE) {
		echo "Entrada creada con exito";
	}else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
}


?>