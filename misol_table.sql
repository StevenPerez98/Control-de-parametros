use misol;
CREATE TABLE WBVF(
	id INT PRIMARY KEY NOT NULL auto_increment,
    no_obra VARCHAR(20),
    nombre_proy VARCHAR(20),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    /*CONTROL*/
    el_speed VARCHAR(5),el_roping varchar(5), max_rpm varchar(5),inspect_rpm varchar (5),creep_rpm varchar(5),
    relevel_rpm varchar(5),init_drv varchar(5),special_drv varchar(5),max_floor varchar(5),chime_point varchar(5),
    run_open varchar(5),fwd_direction varchar(5),gov_sel varchar(5),tqbias_select varchar(5),tqbias_delta varchar(5),
    tqbias_rdytime varchar(5),suds_accel varchar(5),unbral_gain varchar(5),edecel_accel varchar(5),motor varchar(5),
    eld_spdmode VARCHAR(5),numof_motor varchar(5),
    /*FACTORY*/
    torque_limit varchar(5),dclink_scale varchar(5),current_scale varchar(5),input_voltage varchar(5),eldinput_vol varchar(5),
    tgripple_wcc varchar(5),invov_level varchar(5),ovrspd_level varchar(5),ovrload_time varchar(5),suds_acc varchar(5),
    carrier_freq varchar(5),encoder_dir varchar(5),encoder_type varchar(5),sincos_theta varchar(5),sin_max varchar(5),
    sin_min varchar(5),cos_max varchar(5),cos_min varchar(5),invoc_level varchar(5),scaledc_volt varchar(5),
    /*VOLTAGE*/
    rs varchar(5),st varchar(5),rt varchar(5),dc_link varchar(5),rfe varchar(5),sfe varchar(5),tfe varchar(5),
    /*MOTOR*/
    motor_select varchar(10),motor_cap varchar(10),mot_ratv varchar(10),mot_rata varchar(10),motor_poles varchar(10),
    encoder_ppr varchar(10),wrpm_base varchar(10),iqse_rate varchar(10),u_angle varchar(10),motoru_angle varchar(10),
    angle_mrt varchar(10),sig_time varchar(10),mot_ls varchar(10),mot_rs varchar(10),mot_ke varchar(10),sheave_dia varchar(10)
    
    
);
select *from WBVF ;
INSERT INTO WBVF (mot_ls,mot_rs,mot_ke) VALUES ('122.4','BOSCO','123');

ALTER TABLE WBVF
CHANGE fecha fecha_ingreso TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE WBVF
CHANGE edecel_decel edecel_accel varchar(5);
