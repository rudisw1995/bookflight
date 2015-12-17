-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 04:27 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lalala`
--
CREATE DATABASE IF NOT EXISTS `lalala` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lalala`;

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE IF NOT EXISTS `airplane` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(120) NOT NULL,
  `DEPART` varchar(150) NOT NULL,
  `RETURN` varchar(150) NOT NULL,
  `CLASS` varchar(120) NOT NULL,
  `DEPARTURE_DATE` date NOT NULL,
  `PRICE` int(30) NOT NULL,
  `ID_JAM` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3212 ;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`ID`, `NAME`, `DEPART`, `RETURN`, `CLASS`, `DEPARTURE_DATE`, `PRICE`, `ID_JAM`) VALUES
(123, 'rudi', '3', '2', 'ECONOMY', '2015-12-30', 400000, 13),
(3211, 'Sandro Butarbutar', '3', '2', 'ECONOMY', '2015-12-30', 400000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`USERNAME`, `PASSWORD`) VALUES
('rudi', '1'),
('sandro', '11'),
('reja', '119'),
('badrul mashar', '911'),
('DEPA', '3'),
('DESI', 'lapet'),
('tsatsa  tjantik', 'qwerty'),
('TASYA', 'ARVIN'),
('izza', 'izza'),
('nibras', '429577008611649c7cb858fced59ccdf'),
('DA', 'a87ff679a2f3e71d9181a67b7542122c'),
('nibras', '429577008611649c7cb858fced59ccdf');

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE IF NOT EXISTS `depart` (
  `id_airport` int(30) NOT NULL AUTO_INCREMENT,
  `depart` varchar(100) NOT NULL,
  PRIMARY KEY (`id_airport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id_airport`, `depart`) VALUES
(1, 'Bandung - Hussein Sastranegara International Airport'),
(2, 'Bangkok - Suvarnabhumi International Airport'),
(3, 'Jakarta - Soekarno-Hatta International Airport'),
(4, 'Singapore - Changi Airport');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(40) NOT NULL AUTO_INCREMENT,
  `id_user` int(30) NOT NULL,
  `file_name` varchar(44) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_user`, `file_name`) VALUES
(1, 909, 'IKHSAN.jpg'),
(2, 909, 'IKHSAN.jpg'),
(3, 412, '1 001.jpg'),
(4, 63, 'iseng.jpg'),
(5, 63, '1 001.jpg'),
(6, 3, '1 001.jpg'),
(7, 123, '1 001.jpg'),
(8, 3211, '1 001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id_harga` int(30) NOT NULL AUTO_INCREMENT,
  `id_depart` int(30) NOT NULL,
  `id_return` int(30) NOT NULL,
  `harga` int(30) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `id_depart`, `id_return`, `harga`) VALUES
(1, 1, 2, 450000),
(2, 2, 1, 450000),
(3, 1, 4, 200000),
(4, 4, 1, 200000),
(5, 3, 2, 400000),
(6, 2, 3, 400000),
(7, 2, 4, 110000),
(8, 4, 2, 110000),
(9, 3, 4, 95000),
(10, 4, 3, 95000),
(11, 1, 3, 50000),
(12, 3, 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `depart` varchar(88) NOT NULL,
  `arrive` varchar(77) NOT NULL,
  `departure_time` varchar(30) NOT NULL,
  `arrival_time` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `depart`, `arrive`, `departure_time`, `arrival_time`) VALUES
(1, '1', '2', '06.30', '09.30'),
(2, '1', '2', '12.00', '15.00'),
(3, '1', '2', '18.45', '21.45'),
(4, '2', '1', '05.00', '08.00'),
(5, '2', '1', '14.30', '17.30'),
(6, '2', '1', '21.00', '24.00'),
(7, '1', '4', '04.00', '06.25'),
(8, '1', '4', '10.00', '12.25'),
(9, '1', '4', '17.00', '19.25'),
(10, '4', '1', '07.00', '07.55'),
(11, '4', '1', '14.30', '15.55'),
(12, '4', '1', '19.00', '19.55'),
(13, '3', '2', '07.25', '09.50'),
(14, '3', '2', '15.00', '17.25'),
(15, '3', '2', '20.00', '22.30'),
(16, '2', '3', '06.30', '09.00'),
(17, '2', '3', '13.25', '15.00'),
(18, '2', '3', '16.00', '19.10'),
(19, '3', '4', '05.00', '07.00'),
(20, '3', '4', '11.00', '12.50'),
(21, '3', '4', '18.00', '19.20'),
(22, '4', '3', '08.00', '08.30'),
(23, '4', '3', '14.00', '14.55'),
(24, '4', '3', '18.30', '19.25'),
(25, '2', '4', '08.00', '09.55'),
(26, '2', '4', '15.50', '18.00'),
(27, '2', '4', '21.00', '22.45'),
(28, '4', '2', '04.30', '07.00'),
(29, '4', '2', '11.30', '13.05'),
(30, '4', '2', '18.35', '21.05'),
(31, '1', '3', '06.00', '06.15'),
(32, '1', '3', '14.00', '14.15'),
(33, '1', '3', '18.00', '18.15'),
(34, '3', '1', '07.00', '07.15'),
(35, '3', '1', '15.00', '15.15'),
(36, '3', '1', '20.00', '20.15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
