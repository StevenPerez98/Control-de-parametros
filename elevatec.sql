-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 11:38 PM
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
-- Table structure for table `elevatec`
--

CREATE TABLE `elevatec` (
  `id` int(11) NOT NULL,
  `no_proyecto` char(20) DEFAULT NULL,
  `proyecto` varchar(25) DEFAULT NULL,
  `serie` varchar(10) DEFAULT NULL,
  `motor` varchar(20) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elevatec`
--

INSERT INTO `elevatec` (`id`, `no_proyecto`, `proyecto`, `serie`, `motor`, `fecha`) VALUES
(1, '123', 'BOSCO', 'STVF 9', 'Sincrono', '2020-02-18 09:30:49'),
(2, '987', 'FORUM', 'STVF 5', 'Seleccione', '2020-02-18 09:30:49'),
(3, '74532', 'SITINO01', 'STVF 9', 'Sincrono', '2020-02-18 10:21:17'),
(4, '9011-2', 'Naranjo Mall', 'STVF 5', 'Asincrono', '2020-02-18 12:56:05'),
(5, '901543', 'Naranjo Mall23', 'STVF 9', 'Sincrono', '2020-02-18 13:12:45'),
(6, 'A111', 'Miraflores', 'STVF 7', 'Sincrono', '2020-02-18 15:28:03'),
(7, 'A111', 'Miraflores', 'STVF 7', 'Sincrono', '2020-02-18 15:28:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elevatec`
--
ALTER TABLE `elevatec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elevatec`
--
ALTER TABLE `elevatec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
