<!DOCTYPE  html>
	<html>
	<head>
		<title>Elevatec</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" type="image/png" href="imagenes/elevatec.png">
   		<link rel="stylesheet"  href="css/estilos.css">

	</head>

	<body bgcolor="#e3f2fx">

		<div class="form">
			<nav class="nav-extended #0277bd light-blue darken-3">
    			<div class="nav-wrapper container">
    				<a href="main.html" class="brand-logo left">Hyundai WBVF</a>
    			</div>
    		</nav>
		</div>

		<div class="section container">
			<table class="row card-panel">
				<tbody>
					
					<thead>
						<tr>
							<th><center>No. Obra</center></th>
							<th><center>Nombre del Proyecto</center></th>
							<th><center>Fecha de ingreso</center></th>
						</tr>
					</thead>

					<?php
						$conexion = mysqli_connect("localhost","root","","misol");
							if(!$conexion){
							echo "Error al conectar a la base de datos";

						}else{
							echo "";
						}

						$query= "SELECT * FROM wbvf"; 
						$resultado= $conexion ->query($query);
						while($row= $resultado -> fetch_assoc()){
					?>

					<tr>
						<td><center><?php echo $row['no_obra'];?></center></td>
						<td><center><?php echo $row['nombre_proy'];?></center></td>
						<td><center><?php echo $row['fecha'];?></center></td>
					
						<td>
							<a href="wbvf_parametros.php?no_obra=<?php echo $row['no_obra'];?>">
								<i class="material-icons">remove_red_eye</i>
						</td>
					</tr>

					

					<?php
					
						}
					?>
				</tbody> 
			</table>

			<div>
				<a href="wbvf_agregar.php">
					<center>
						<button class="btn - #1565c0 blue darken-3" type="submit">
							Agregar Proyecto
						</button>
					</center>
				</a>
			</div>

		</div>
	

		<script
	 		src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
		</script>
	</body>
	</html>	