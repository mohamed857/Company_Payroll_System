-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 04:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `rank` float NOT NULL,
  `hours` float NOT NULL,
  `over` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `address`, `rank`, `hours`, `over`) VALUES
(0, '', '', 0, 0, 0),
(15, 'ahmed', 'ain shams', 50, 5, 2),
(1999, 'ibrahim', 'german', 55, 7, 2),
(3000, 'tark', 'ain shams', 100, 5, 2),
(6400, 'mohamed', '15nasd', 4, 3, 2),
(300200, 'sayed', 'Ø³Ø±ÙŠØ§Ù‚ÙˆØ³', 200, 4, 1),
(640000, 'mohamed', '15nasd', 4, 3, 2),
(20000000, 'ali', 'german', 30, 6, 2),
(2147483647, 'malk', '15nasd', 28, 6, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
