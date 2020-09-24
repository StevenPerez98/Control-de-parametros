<?php 
	include 'Conexion.php';
	$no_proyecto = $_GET['no_proyecto'];

	$consulta = "select * from elevatec where no_proyecto = '$no_proyecto'";
	$resultado = mysqli_query($conexion,$consulta);

	while ($fila = $resultado -> fetch_array() ) {
		$proyecto[] = array_map('utf8_encode', $fila);

	}

	echo json_encode($proyecto);
	$resultado ->close();
 ?>

