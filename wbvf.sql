-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 11:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misol`
--

-- --------------------------------------------------------

--
-- Table structure for table `wbvf`
--

CREATE TABLE `wbvf` (
  `id` int(11) NOT NULL,
  `no_obra` varchar(20) DEFAULT NULL,
  `nombre_proy` varchar(20) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `el_speed` varchar(5) DEFAULT NULL,
  `el_roping` varchar(5) DEFAULT NULL,
  `max_rpm` varchar(5) DEFAULT NULL,
  `inspect_rpm` varchar(5) DEFAULT NULL,
  `creep_rpm` varchar(5) DEFAULT NULL,
  `relevel_rpm` varchar(5) DEFAULT NULL,
  `init_drv` varchar(5) DEFAULT NULL,
  `special_drv` varchar(5) DEFAULT NULL,
  `max_floor` varchar(5) DEFAULT NULL,
  `chime_point` varchar(5) DEFAULT NULL,
  `run_open` varchar(5) DEFAULT NULL,
  `fwd_direction` varchar(5) DEFAULT NULL,
  `gov_sel` varchar(5) DEFAULT NULL,
  `tqbias_select` varchar(5) DEFAULT NULL,
  `tqbias_delta` varchar(5) DEFAULT NULL,
  `tqbias_rdytime` varchar(5) DEFAULT NULL,
  `suds_accel` varchar(5) DEFAULT NULL,
  `unbral_gain` varchar(5) DEFAULT NULL,
  `edecel_accel` varchar(5) DEFAULT NULL,
  `motor` varchar(5) DEFAULT NULL,
  `eld_spdmode` varchar(5) DEFAULT NULL,
  `numof_motor` varchar(5) DEFAULT NULL,
  `torque_limit` varchar(5) DEFAULT NULL,
  `dclink_scale` varchar(5) DEFAULT NULL,
  `current_scale` varchar(5) DEFAULT NULL,
  `input_voltage` varchar(5) DEFAULT NULL,
  `eldinput_vol` varchar(5) DEFAULT NULL,
  `tgripple_wcc` varchar(5) DEFAULT NULL,
  `invov_level` varchar(5) DEFAULT NULL,
  `ovrspd_level` varchar(5) DEFAULT NULL,
  `ovrload_time` varchar(5) DEFAULT NULL,
  `suds_acc` varchar(5) DEFAULT NULL,
  `carrier_freq` varchar(5) DEFAULT NULL,
  `encoder_dir` varchar(5) DEFAULT NULL,
  `encoder_type` varchar(5) DEFAULT NULL,
  `sincos_theta` varchar(5) DEFAULT NULL,
  `sin_max` varchar(5) DEFAULT NULL,
  `sin_min` varchar(5) DEFAULT NULL,
  `cos_max` varchar(5) DEFAULT NULL,
  `cos_min` varchar(5) DEFAULT NULL,
  `invoc_level` varchar(5) DEFAULT NULL,
  `scaledc_volt` varchar(5) DEFAULT NULL,
  `rs` varchar(5) DEFAULT NULL,
  `st` varchar(5) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `dc_link` varchar(5) DEFAULT NULL,
  `rfe` varchar(5) DEFAULT NULL,
  `sfe` varchar(5) DEFAULT NULL,
  `tfe` varchar(5) DEFAULT NULL,
  `motor_select` varchar(10) DEFAULT NULL,
  `motor_cap` varchar(10) DEFAULT NULL,
  `mot_ratv` varchar(10) DEFAULT NULL,
  `mot_rata` varchar(10) DEFAULT NULL,
  `motor_poles` varchar(10) DEFAULT NULL,
  `encoder_ppr` varchar(10) DEFAULT NULL,
  `wrpm_base` varchar(10) DEFAULT NULL,
  `iqse_rate` varchar(10) DEFAULT NULL,
  `u_angle` varchar(10) DEFAULT NULL,
  `motoru_angle` varchar(10) DEFAULT NULL,
  `angle_mrt` varchar(10) DEFAULT NULL,
  `sig_time` varchar(10) DEFAULT NULL,
  `mot_ls` varchar(10) DEFAULT NULL,
  `mot_rs` varchar(10) DEFAULT NULL,
  `mot_ke` varchar(10) DEFAULT NULL,
  `sheave_dia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wbvf`
--
ALTER TABLE `wbvf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wbvf`
--
ALTER TABLE `wbvf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
