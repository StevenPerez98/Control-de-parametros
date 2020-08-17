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

		<form action="Insertar_Parametros.php" method="POST">
			<div class="navbar-fixed">
				<nav class="nav-extended #0277bd light-blue darken-3">
					<div class="nav-wrapper container">
						<a href="wbvf_registro.php" class="brand-logo right">WBVF</a>
						<a href="wbvf_registro.php" class="brand-logo left">Nuevo registro</a>
					</div>
				</nav>
			
			</div>

			<div class="section container">
			     <div class="row ">
			     	<div class="col s8 offset-s2">
			     		<div class="row card-panel">

			     			<div>
								<h5><center>Datos del proyecto</center></h5>
							</div>

						    <div class="input-field col s6">
						          <input name="no_obra" id="no_obra" type="text" class="validate" >
						          <label for="no_obra">No. Proyecto</label>
						    </div>

						    <div class="input-field col s6">
						          <input name="nombre_proy" id="nombre_proy" type="text" class="validate" >
						          <label for="nombre_proy">Nombre</label>
						    </div>
						<!--------DATOS DEL CONTROL------------>
						    <div>
						    	<h5><center>CONTROL</center></h5>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="el_speed" id="el_speed" class="validate">
						    	<label for="el_speed">01 EL SPEED</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="el_roping" id="el_roping" class="validate">
						    	<label for="el_roping">02 E/L ROPING</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="max_rpm" id="max_rpm" class="validate">
						    	<label for="max_rpm">03 MAX RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="inspect_rpm" id="inspect_rpm" class="validate">
						    	<label for="inspect_rpm">05 INSPECT RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="creep_rpm" id="creep_rpm" class="validate">
						    	<label for="creep_rpm">06 CREEP RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="relevel_rpm" id="relevel_rpm" class="validate">
						    	<label for="relevel_rpm">07 RELEVEL RPM</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="init_drv" id="init_drv" class="validate">
						    	<label for="init_drv">08 FLR INIT DRV</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="special_drv" id="special_drv" class="validate">
						    	<label for="special_drv">09 SPECIAL DRV</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="max_floor" id="max_floor" class="validate">
						    	<label for="max_floor">10 MAX FLOOR</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="chime_point" id="chime_point" class="validate">
						    	<label for="chime_point">11 CHIME POINT</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="run_open" id="run_open" class="validate">
						    	<label for="run_open">12 RUN OPEN LEC</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="fwd_direction" id="fwd_direction" class="validate">
						    	<label for="fwd_direction">17 FWD DIRECTION</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="gov_sel" id="gov_sel" class="validate">
						    	<label for="gov_sel">18 GOVENNOR SEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_select" id="tqbias_select" class="validate">
						    	<label for="tqbias_select">19 TQBIAS SELECT</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_delta" id="tqbias_delta" class="validate">
						    	<label for="tqbias_delta">20 TQBIAS DELTA</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="tqbias_rdytime" id="tqbias_rdytime" class="validate">
						    	<label for="tqbias_rdytime">21 TQBIAS RDYTIME</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="suds_accel" id="suds_accel" class="validate">
						    	<label for="suds_accel">28 SUDS ACCEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="unbral_gain" id="unbral_gain" class="validate">
						    	<label for="unbral_gain">30 UNBRAL GAIN</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="edecel_accel" id="edecel_accel" class="validate">
						    	<label for="edecel_accel">42 E DECEL ACCEL</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="motor" id="motor" class="validate">
						    	<label for="motor">48 MOTOR</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="eld_spdmode" id="eld_spdmode" class="validate">
						    	<label for="eld_spdmode">49ELD SPD MODE</label>
						    </div>

						    <div class="input-field col s6">
						    	<input type="text" name="numof_motor" id="numof_motor" class="validate">
						    	<label for="numof_motor">50 NUM OF MOTOR</label>
						    </div>

						<!-----------FACTORY---------------->
						<div>
							<h5><center>FACTORY</center></h5>
						</div>

						<div class="input-field col s6">
							<input type="text" name="torque_limit" id="torque_limit" class="validate">
							<label for="">01 TORQUE LIMIT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="dclink_scale" id="dclink_scale" class="validate">
							<label for="dclink_scale">02 DC LINK SCALE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="current_scale" id="current_scale" class="validate">
							<label for="current_scale">03 CURRENT SCALE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="input_voltage" id="input_voltage" class="validate">
							<label for="input_voltage">04 INPUT VOLTAGE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="eldinput_vol" id="eldinput_vol" class="validate">
							<label for="eldinput_vol">05 ELD INPUT VOLT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="tgripple_wcc" id="tgripple_wcc" class="validate">
							<label for="tgripple_wcc">06 TG RIPPLE WCC</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="invov_level" id="invov_level" class="validate">
							<label for="invov_level">07 INV OV LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="ovrspd_level" id="ovrspd_level" class="validate">
							<label for="ovrspd_level">08 OVER SPD LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="ovrload_time" id="ovrload_time" class="validate">
							<label for="ovrload_time">09 OVER LOAD TIME</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="suds_acc" id="suds_acc" class="validate">
							<label for="suds_acc">10 SUDS ACC</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="carrier_freq" id="carrier_freq" class="validate">
							<label for="carrier_freq">11 CARRIER FREQ</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_dir" id="encoder_dir" class="validate">
							<label for="encoder_dir">12 ENCODER DIR</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_type" id="encoder_type" class="validate">
							<label for="encoder_type">13 ENCODER TYPE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sincos_theta" id="sincos_theta" class="validate">
							<label for="sincos_theta">14 SINCOS THETA</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sin_max" id="sin_max" class="validate">
							<label for="sin_max">15 SIN MAX</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sin_min" id="sin_min" class="validate">
							<label for="sin_min">16 SIN MIN</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="cos_max" id="cos_max" class="validate">
							<label for="cos_max">17 COS MAX</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="cos_min" id="cos_min" class="validate">
							<label for="cos_min">18 COS MIN</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="invoc_level" id="invoc_level" class="validate">
							<label for="invoc_level">19 INV. OC LEVEL</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="scaledc_volt" id="scaledc_volt" class="validate">
							<label for="scaledc_volt">20 SCALE DC VOLT</label>
						</div>


						<!---------- VOLTAGE-------->
						<div>
							<h5><center>VOLTAGE</center></h5>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="rs" id="rs" class="validate">
							<label for="rs">R-S</label>
						</div>	

						<div class="input-field col s6">
							<input type="text" name="st" id="st" class="validate">
							<label for="st">S-T</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="rt" id="rt" class="validate">
							<label for="rt">R-T</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="dc_link" id="dc_link" class="validate">
							<label for="dc_link">DC LINK</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="rfe" id="rfe" class="validate">
							<label for="rfe">R-FE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sfe" id="sfe" class="validate">
							<label for="sfe">S-FE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="tfe" id="tfe" class="validate">
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
							<input type="text" name="motor_select" id="motor_select" class="validate">
							<label for="motor_select">01 MOTOR SELECT</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motor_cap" id="motor_cap" class="validate">
							<label for="motor_cap">02 MOTOR CAPACITY</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ratv" id="mot_ratv" class="validate">
							<label for="mot_ratv">03 MOTOR RATING V</label>
						</div>


						<div class="input-field col s6">
							<input type="text" name="mot_rata" id="mot_rata" class="validate">
							<label for="mot_rata">04 MOTOR RATING A</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motor_poles" id="motor_poles" class="validate">
							<label for="motor_poles">05 MOTOR POLES</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="encoder_ppr" id="encoder_ppr" class="">
							<label for="encoder_ppr">06 ENODER PPR</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="wrpm_base" id="wrpm_base" class="validate">
							<label for="wrpm_base">07 WRPM BASE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="iqse_rate" id="iqse_rate" class="validate">
							<label for="iqse_rate">08 IQSE RATE</label>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="u_angle" id="u_angle" class="validate">
							<label for="u_angle">09 KNOW U ANGLE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="motoru_angle" id="motoru_angle" class="validate">
							<label for="motoru_angle">10 MOTOR U ANGLE</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="angle_mrt" id="angle_mrt" class="validate">
							<label for="angle_mrt">11 ANGLE MRTHOD</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="sig_time" id="sig_time" class="validate">
							<label for="sig_time">12 SIG INJ. TIME</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ls" id="mot_ls" class="validate">
							<label for="mot_ls">13 MOTOR LS</label> 
						</div>
							
						<div class="input-field col s6">
							<input type="text" name="mot_rs" id="mot_rs" class="validate">
							<label for="mot_rs">14 MOTOR RS</label> 
						</div>

						<div class="input-field col s6">
							<input type="text" name="mot_ke" id="mot_ke" class="validate">
							<label for="mot_ke">15 MOTOR KE</label> 
						</div>

						<div class="input-field col s6">
							<input type="text" name="sheave_dia" id="sheave_dia" class="validate">
							<label for="sheave_dia">16 m sheave dia</label> 
						</div>

						   <!-- <div class="input-field col s12">
						    	<i class="material-icons prefix">mode_edit</i>
						        <textarea  name="escusa" id="escusa" class="materialize-textarea"></textarea>
						        <label for="ecusa">Por que se presento tarde?</label>
		        			</div>-->

		        			<center>

								<button class="btn - #1565c0 blue darken-3" type="submit">Enviar</button>

							</center>
						</div>  
			     	</div>
			     </div>
			</div>

		</form>
	

	
	<script
	 		src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
		</script>
	</body>
	</html>	





