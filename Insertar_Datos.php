<?php
include 'Conexion.php';
$no_proyecto = $_POST["no_proyecto"];
$proyecto = $_POST["proyecto"];
$serie = $_POST["serie"];
$motor = $_POST["motor"];

$consulta = "INSERT INTO elevatec(no_proyecto,proyecto,serie,motor)
			 VALUES ('$no_proyecto','$proyecto','$serie','$motor')";

$resultado = mysqli_query($conexion,$consulta);

if(!$resultado){
	echo 'Error al registrar el proyecto';
}else{
	echo 'Proyecto registrado';
}
mysqli_close($conexion);

?>
