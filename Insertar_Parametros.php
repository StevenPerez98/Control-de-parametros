<?php
ob_start();
include 'Conexion.php';
$no_obra = $_POST["no_obra"];
$nombre_proy = $_POST["nombre_proy"];

$el_speed = $_POST["el_speed"];
$el_roping = $_POST["el_roping"];
$max_rpm = $_POST["max_rpm"];
$inspect_rpm = $_POST["inspect_rpm"];
$creep_rpm = $_POST["creep_rpm"];
$relevel_rpm = $_POST["relevel_rpm"];
$init_drv = $_POST["init_drv"];
$special_drv = $_POST["special_drv"];
$max_floor = $_POST["max_floor"]; 
$chime_point = $_POST["chime_point"];
$run_open = $_POST["run_open"];
$fwd_direction = $_POST["fwd_direction"];
$gov_sel = $_POST["gov_sel"];
$tqbias_select = $_POST["tqbias_select"];
$tqbias_delta = $_POST["tqbias_delta"];
$tqbias_rdytime = $_POST["tqbias_rdytime"];
$suds_accel = $_POST["suds_accel"];
$unbral_gain = $_POST["unbral_gain"];
$edecel_accel = $_POST["edecel_accel"];
$motor = $_POST["motor"];
$eld_spdmode = $_POST["eld_spdmode"];
$numof_motor = $_POST["numof_motor"];

$torque_limit = $_POST["torque_limit"];
$dclink_scale = $_POST["dclink_scale"];
$current_scale = $_POST["current_scale"];
$input_voltage = $_POST["input_voltage"];
$eldinput_vol = $_POST["eldinput_vol"];
$tgripple_wcc = $_POST["tgripple_wcc"];
$invov_level = $_POST["invov_level"];
$ovrspd_level = $_POST["ovrspd_level"];
$ovrload_time = $_POST["ovrload_time"];
$suds_acc = $_POST["suds_acc"];
$carrier_freq = $_POST["carrier_freq"];
$encoder_dir = $_POST["encoder_dir"];
$encoder_type = $_POST["encoder_type"];
$sincos_theta = $_POST["sincos_theta"];
$sin_max = $_POST["sin_max"];
$sin_min = $_POST["sin_min"];
$cos_max = $_POST["cos_max"];
$cos_min = $_POST["cos_min"];
$invoc_level = $_POST["invoc_level"];
$scaledc_volt = $_POST["scaledc_volt"];

$rs = $_POST["rs"];
$st = $_POST["st"];
$rt = $_POST["rt"];
$dc_link = $_POST["dc_link"];
$rfe = $_POST["rfe"];
$sfe = $_POST["sfe"];
$tfe = $_POST["tfe"];

$motor_select = $_POST["motor_select"];
$motor_cap = $_POST["motor_cap"];
$mot_ratv = $_POST["mot_ratv"];
$mot_rata = $_POST["mot_rata"];
$motor_poles = $_POST["motor_poles"];
$encoder_ppr = $_POST["encoder_ppr"];
$wrpm_base = $_POST["wrpm_base"];
$iqse_rate = $_POST["iqse_rate"];
$u_angle = $_POST["u_angle"];
$motoru_angle = $_POST["motoru_angle"];
$angle_mrt = $_POST["angle_mrt"];
$sig_time = $_POST["sig_time"];
$mot_ls = $_POST["mot_ls"];
$mot_rs = $_POST["mot_rs"];
$mot_ke = $_POST["mot_ke"];
$sheave_dia = $_POST["sheave_dia"];


$consulta = "INSERT INTO WBVF(no_obra,nombre_proy,el_speed,el_roping,max_rpm,inspect_rpm,
								creep_rpm,relevel_rpm,
								init_drv,special_drv,max_floor,chime_point,run_open,fwd_direction,
								gov_sel,tqbias_select,tqbias_delta,tqbias_rdytime,suds_accel,unbral_gain,edecel_accel,motor,eld_spdmode,numof_motor,

								torque_limit,dclink_scale,current_scale,input_voltage,eldinput_vol,tgripple_wcc,
								invov_level,ovrspd_level,ovrload_time,suds_acc,carrier_freq,encoder_dir,encoder_type,
								sincos_theta,sin_max,sin_min,cos_max,cos_min,invoc_level,scaledc_volt,

								rs,st,rt,dc_link,rfe,sfe,tfe,

								motor_select,motor_cap,mot_ratv,mot_rata,motor_poles,encoder_ppr,wrpm_base,iqse_rate,
								u_angle,motoru_angle,angle_mrt,sig_time,mot_ls,mot_rs,mot_ke,sheave_dia)


			 VALUES ('$no_obra','$nombre_proy','$el_speed','$el_roping','$max_rpm','$inspect_rpm','$creep_rpm','$relevel_rpm',
								'$init_drv','$special_drv','$max_floor','$chime_point','$run_open','$fwd_direction',
								'$gov_sel','$tqbias_select','$tqbias_delta','$tqbias_rdytime','$suds_accel',
								'$unbral_gain','$edecel_accel','$motor','$eld_spdmode','$numof_motor',

								'$torque_limit','$dclink_scale','$current_scale','$input_voltage','$eldinput_vol',
								'$tgripple_wcc','$invov_level','$ovrspd_level','$ovrload_time','$suds_acc',
								'$carrier_freq','$encoder_dir','$encoder_type','$sincos_theta','$sin_max',
								'$sin_min','$cos_max','$cos_min','$invoc_level','$scaledc_volt',

								'$rs','$st','$rt','$dc_link','$rfe','$sfe','$tfe',

								'$motor_select','$motor_cap','$mot_ratv','$mot_rata','$motor_poles','$encoder_ppr',
								'$wrpm_base','$iqse_rate','$u_angle','$motoru_angle','$angle_mrt','$sig_time',
								'$mot_ls','$mot_rs','$mot_ke','$sheave_dia')";

$resultado = mysqli_query($conexion,$consulta);

if(!$resultado){
	echo "Error al enviar datos";
}else{
	echo '<script>
			alert("Los datos fueron enviados");
				window.history.go(-1)
			 </script>';
			 exit;
			}
			 
mysqli_close($conexion);
	 
ob_end_flush();
?>
