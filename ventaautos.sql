-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 06:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ventaautos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auto`
--

CREATE TABLE `tbl_auto` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `annio` varchar(5) NOT NULL,
  `km` varchar(50) NOT NULL,
  `no_serie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_auto`
--

INSERT INTO `tbl_auto` (`id`, `marca`, `modelo`, `version`, `annio`, `km`, `no_serie`) VALUES
(3, 'audi', '20JK9', '9', '2018', '190000', '4313'),
(4, 'Ferrari', '20JK6', '10', '2016', '2000', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `curp` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `rfc`, `curp`) VALUES
(1, 'Juan', 'Mora', 'Samudio', '951107', 'JUMORS00341HMCJJIA'),
(3, 'Alberto', 'Mora', 'Juarez', '951113', 'ABRJ00211EMABS8'),
(5, 'Edith', 'Salazar', 'Rubio', '6751604', 'EDSR5149HJUMR3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_venta`
--

CREATE TABLE `tbl_venta` (
  `id` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `km_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_venta`
--

INSERT INTO `tbl_venta` (`id`, `id_vehiculo`, `id_cliente`, `precio_venta`, `km_venta`, `fecha`) VALUES
(1, 2, 2, 150000, 12444, '2023-01-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auto`
--
ALTER TABLE `tbl_auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_venta`
--
ALTER TABLE `tbl_venta`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
