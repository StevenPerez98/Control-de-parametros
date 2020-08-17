<!DOCTYPE html>
<html>
<head>
	<title>Registro WBVF</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!--Import Google Icon Font-->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="icon" type="image/png" href="imagenes/elevatec.png">
   	<link rel="stylesheet"  href="css/estilos.css">
    
</head>
<body bgcolor="#e3f2f">
	<?php

			$conexion = mysqli_connect("localhost","root","","misol");
				if(!$conexion){
					echo "Error al conectar a la base de datos";

			}else{
				echo "";
			}

			$no_obra = $_REQUEST['no_obra'];
			$query= "SELECT * FROM wbvf WHERE no_obra = '$no_obra'"; //datos";
			$resultado= $conexion ->query($query);
			$row= $resultado -> fetch_assoc()
		?>
	<div class="form">
		<form  method="POST">
			<div class="navbar-fixed"><!--fijar el encabezado -->
				<nav class="#0277bd light-blue darken-3">
					<div class="nav-wrapper container">
						<a href="wbvf_registro.php" class="brand-logo right">WBVF</a>
						<a href="wbvf_registro.php" class="brand-logo left">Elevatec</a>
					</div>
				</nav>
			</div>
		</form>
	</div>
	
	<div class="section container">
		<div class="row">
			<div class="col s8 offset-s2">
				<div class="row card-panel">
					<div>
						<center><h2>Registro</h2></center>
					</div>

					<div class="input-field col s6">
						          <input name="no_obra" id="no_obra" type="text" class="validate" 
						          value="<?php echo $row['no_obra'];?>">
						          <label for="no_obra">No. Proyecto</label>
						    </div>

						    <div class="input-field col s6">
						          <input name="nombre_proy" id="nombre_proy" type="text" class="validate" 
						          value="<?php echo $row['nombre_proy'];?>">
						          <label for="nombre_proy">Nombre</label>
						    </div>

						<!------DATOS DE CONTROL-->
						<div>
							<h5><center>CONTROL</center></h5>
						</div>    

						<div class="input-field col s6">
							<input type="text" name="el_speed" id="el_speed" class="validate" 
							value="<?php echo $row['el_speed'];?>">
							<label for="el_speed">01 EL SPEED</label>
						</div>

						<div class="input-field col s6">
						    	<input type="text" name="el_roping" id="el_roping" class="validate" 
						    	value="<?php echo $row['el_roping'];?>">
						    	<label for="el_roping">02 E/L ROPING</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="max_rpm" id="max_rpm" class="validate"
						    	value="<?php echo $row['max_rpm'];?>">
						    	<label for="max_rpm">03 MAX RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="inspect_rpm" id="inspect_rpm" class="validate"
						    	value="<?php echo $row['inspect_rpm'];?>">
						    	<label for="inspect_rpm">05 INSPECT RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="creep_rpm" id="creep_rpm" class="validate"
						    	value="<?php echo $row['creep_rpm'];?>">
						    	<label for="creep_rpm">06 CREEP RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="relevel_rpm" id="relevel_rpm" class="validate"
						    	value="<?php echo $row['relevel_rpm'];?>">
						    	<label for="relevel_rpm">07 RELEVEL RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="init_drv" id="init_drv" class="validate"
						    	value="<?php echo $row['init_drv'];?>">
						    	<label for="init_drv">08 FLR INIT DRV</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="special_drv" id="special_drv" class="validate"
						    	value="<?php echo $row['special_drv'];?>">
						    	<label for="special_drv">09 SPECIAL DRV</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="max_floor" id="max_floor" class="validate"
						    	value="<?php echo $row['max_floor'];?>">
						    	<label for="max_floor">10 MAX FLOOR</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="chime_point" id="chime_point" class="validate"
						    	value="<?php echo $row['chime_point'];?>">
						    	<label for="chime_point">11 CHIME POINT</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="run_open" id="run_open" class="validate"
						    	value="<?php echo $row['run_open'];?>">
						    	<label for="run_open">12 RUN OPEN LEC</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="fwd_direction" id="fwd_direction" class="validate"
						    	value="<?php echo $row['fwd_direction'];?>">
						    	<label for="fwd_direction">17 FWD DIRECTION</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="gov_sel" id="gov_sel" class="validate"
						    	value="<?php echo $row['gov_sel'];?>">
						    	<label for="gov_sel">18 GOVENNOR SEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_select" id="tqbias_select" class="validate"
						    	value="<?php echo $row['tqbias_select'];?>">
						    	<label for="tqbias_select">19 TQBIAS SELECT</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_delta" id="tqbias_delta" class="validate"
						    	value="<?php echo $row['tqbias_delta'];?>">
						    	<label for="tqbias_delta">20 TQBIAS DELTA</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_rdytime" id="tqbias_rdytime" class="validate"
						    	value="<?php echo $row['tqbias_rdytime'];?>">
						    	<label for="tqbias_rdytime">21 TQBIAS RDYTIME</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="suds_accel" id="suds_accel" class="validate"
						    	value="<?php echo $row['suds_accel'];?>">
						    	<label for="suds_accel">28 SUDS ACCEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="unbral_gain" id="unbral_gain" class="validate"
						    	value="<?php echo $row['unbral_gain'];?>">
						    	<label for="unbral_gain">30 UNBRAL GAIN</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="edecel_accel" id="edecel_accel" class="validate"
						    	value="<?php echo $row['edecel_accel'];?>">
						    	<label for="edecel_accel">42 E DECEL ACCEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="motor" id="motor" class="validate"
						    	value="<?php echo $row['motor'];?>">
						    	<label for="motor">48 MOTOR</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="eld_spdmode" id="eld_spdmode" class="validate"
						    	value="<?php echo $row['eld_spdmode'];?>">
						    	<label for="eld_spdmode">49ELD SPD MODE</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="numof_motor" id="numof_motor" class="validate"
						    	value="<?php echo $row['numof_motor'];?>">
						    	<label for="numof_motor">50 NUM OF MOTOR</label>
						    </div>

						<!-----------FACTORY---------------->
						<div>
							<h5><center>FACTORY</center></h5>
						</div>

						<div class="input-field col s6">
							<input type="text" name="torque_limit" id="torque_limit" class="validate"
							value="<?php echo $row['torque_limit'];?>">
							<label for="">01 TORQUE LIMIT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="dclink_scale" id="dclink_scale" class="validate"
							value="<?php echo $row['dclink_scale'];?>">
							<label for="dclink_scale">02 DC LINK SCALE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="current_scale" id="current_scale" class="validate"
							value="<?php echo $row['current_scale'];?>">
							<label for="current_scale">03 CURRENT SCALE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="input_voltage" id="input_voltage" class="validate"
							value="<?php echo $row['input_voltage'];?>">
							<label for="input_voltage">04 INPUT VOLTAGE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="eldinput_vol" id="eldinput_vol" class="validate"
							value="<?php echo $row['eldinput_vol'];?>">
							<label for="eldinput_vol">05 ELD INPUT VOLT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="tgripple_wcc" id="tgripple_wcc" class="validate"
							value="<?php echo $row['tgripple_wcc'];?>">
							<label for="tgripple_wcc">06 TG RIPPLE WCC</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="invov_level" id="invov_level" class="validate"
							value="<?php echo $row['invov_level'];?>">
							<label for="invov_level">07 INV OV LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="ovrspd_level" id="ovrspd_level" class="validate" 
							value="<?php echo $row['ovrspd_level'];?>">
							<label for="ovrspd_level">08 OVER SPD LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="ovrload_time" id="ovrload_time" class="validate"
							value="<?php echo $row['ovrload_time'];?>">
							<label for="ovrload_time">09 OVER LOAD TIME</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="suds_acc" id="suds_acc" class="validate"
							value="<?php echo $row['suds_acc'];?>">
							<label for="suds_acc">10 SUDS ACC</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="carrier_freq" id="carrier_freq" class="validate"
							value="<?php echo $row['carrier_freq'];?>">
							<label for="carrier_freq">11 CARRIER FREQ</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_dir" id="encoder_dir" class="validate"
							value="<?php echo $row['encoder_dir'];?>">
							<label for="encoder_dir">12 ENCODER DIR</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_type" id="encoder_type" class="validate"
							value="<?php echo $row['encoder_type'];?>">
							<label for="encoder_type">13 ENCODER TYPE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sincos_theta" id="sincos_theta" class="validate"
							value="<?php echo $row['sincos_theta'];?>">
							<label for="sincos_theta">14 SINCOS THETA</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sin_max" id="sin_max" class="validate"
							value="<?php echo $row['sin_max'];?>">
							<label for="sin_max">15 SIN MAX</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sin_min" id="sin_min" class="validate"
							 value="<?php echo $row['sin_min'];?>">
							<label for="sin_min">16 SIN MIN</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="cos_max" id="cos_max" class="validate"
							value ="<?php echo $row['cos_max'];?>">
							<label for="cos_max">17 COS MAX</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="cos_min" id="cos_min" class="validate"
							value="<?php echo $row['cos_min'];?>">
							<label for="cos_min">18 COS MIN</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="invoc_level" id="invoc_level" class="validate"
							value="<?php echo $row['invoc_level'];?>">
							<label for="invoc_level">19 INV. OC LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="scaledc_volt" id="scaledc_volt" class="validatxe"
							value="<?php echo $row['scaledc_volt'];?>">
							<label for="scaledc_volt">20 SCALE DC VOLT</label>
						</div>


						<!---------- VOLTAGE-------->
						<div>
							<h5><center>VOLTAGE</center></h5>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="rs" id="rs" class="validate" 
							value="<?php echo $row['rs'];?>">
							<label for="rs">R-S</label>
						</div>	

						<div class="input-field col s6">
							<input type="text" name="st" id="st" class="validate"
							value="<?php echo $row['st'];?>">
							<label for="st">S-T</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="rt" id="rt" class="validate"
							value="<?php echo $row['rt']?>">
							<label for="rt">R-T</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="dc_link" id="dc_link" class="validate"
							value="<?php echo $row['dc_link'];?>">
							<label for="dc_link">DC LINK</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="rfe" id="rfe" class="validate"
							value="<?php echo $row['rfe'];?>">
							<label for="rfe">R-FE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sfe" id="sfe" class="validate"
							value="<?php echo $row['sfe']?>">
							<label for="sfe">S-FE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="tfe" id="tfe" class="validate"
							value="<?php echo $row['tfe'];?>">
							<label for="tfe">T-FE</label>
						</div>

						<div class="input-field col s6">
							<br>
						</div>

						<!----------MOTOR------->
						<div class="col s12">
							<h5><center>MOTOR</center></h5>
						</div>	

						<div class="input-field col s6">
							<input type="text" name="motor_select" id="motor_select" class="validate"
							value="<?php echo $row['motor_select'];?>">
							<label for="motor_select">01 MOTOR SELECT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motor_cap" id="motor_cap" class="validate"
							value="<?php echo $row['motor_cap'];?>">
							<label for="motor_cap">02 MOTOR CAPACITY</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ratv" id="mot_ratv" class="validate"
							value="<?php echo $row['mot_ratv'];?>">
							<label for="mot_ratv">03 MOTOR RATING V</label>
						</div>


						<div class="input-field col s6">
							<input type="text" name="mot_rata" id="mot_rata" class="validate"
							value="<?php echo $row['mot_rata'];?>">
							<label for="mot_rata">04 MOTOR RATING A</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motor_poles" id="motor_poles" class="validate"
							value="<?php echo $row['motor_poles'];?>">
							<label for="motor_poles">05 MOTOR POLES</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_ppr" id="encoder_ppr" class="" 
							value="<?php echo $row['encoder_ppr'];?>">
							<label for="encoder_ppr">06 ENODER PPR</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="wrpm_base" id="wrpm_base" class="validate"
							value="<?php echo $row['wrpm_base'];?>">
							<label for="wrpm_base">07 WRPM BASE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="iqse_rate" id="iqse_rate" class="validate"
							value="<?php echo $row['iqse_rate'];?>">
							<label for="iqse_rate">08 IQSE RATE</label>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="u_angle" id="u_angle" class="validate"
							value="<?php echo $row['u_angle'];?>">
							<label for="u_angle">09 KNOW U ANGLE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motoru_angle" id="motoru_angle" class="validate"
							value="<?php echo $row['motoru_angle'];?>">
							<label for="motoru_angle">10 MOTOR U ANGLE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="angle_mrt" id="angle_mrt" class="validate"
							value="<?php echo $row['angle_mrt'];?>">
							<label for="angle_mrt">11 ANGLE MRTHOD</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sig_time" id="sig_time" class="validate"
							value="<?php echo $row['sig_time'];?>">
							<label for="sig_time">12 SIG INJ. TIME</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ls" id="mot_ls" class="validate"
							value="<?php echo $row['mot_ls'];?>">
							<label for="mot_ls">13 MOTOR LS</label> 
						</div>
							
						<div class="input-field col s6">
							<input type="text" name="mot_rs" id="mot_rs" class="validate"
							value="<?php echo $row['mot_rs'];?>">
							<label for="mot_rs">14 MOTOR RS</label> 
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ke" id="mot_ke" class="validate"
							value="<?php echo $row['mot_ke'];?>">
							<label for="mot_ke">15 MOTOR KE</label> 
						</div>

						<div class="input-field col s6">
							<input type="text" name="sheave_dia" id="sheave_dia" class="validate"
							value="<?php echo $row['sheave_dia'];?>">
							<label for="sheave_dia">16 m sheave dia</label> 
						</div>

						<!--    <div class="input-field col s12">
						    	<i class="material-icons prefix">mode_edit</i>
						        <textarea  name="escusa" id="escusa" class="materialize-textarea"></textarea>
						        <label for="ecusa">Por que se presento tarde?</label>
						    </div>-->
				</div>
			</div>
		</div>
	</div>

<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
	    document.addEventListener('DOMContentLoaded', function() {
	    	M.AutoInit();
	 	});
	</script>



</body>
</html>