<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	<script src="js/push.min.js"></script>
</head>
<body>
	<?php
		echo'<script>
			Push.create("Elevatec",{
				body:"Se ha ingresado un nuevo proyeto",
				icon:"imagenes/elevatec.png",
				timeout:4000,
				onClick: function(){
					window.location="wbvf_registro.php";
					this.close();
				}

			});
				
		</script>';

	?>
	
</body>
</html>