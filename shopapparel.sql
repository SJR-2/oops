-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 05:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopapparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopapparel`
--

CREATE TABLE `shopapparel` (
  `name` varchar(30) NOT NULL DEFAULT '',
  `price` double DEFAULT NULL,
  `color` varchar(30) NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopapparel`
--

INSERT INTO `shopapparel` (`name`, `price`, `color`, `imagePath`, `type`, `stock`, `ID`) VALUES
('OOPS AUTUMN CAMO', 25, 'WHITE/RED/ORANGE/GREEN', '', 'T-SHIRT', 20, 5),
('OOPS BLUE CAMO', 25, 'WHITE/BLUE', 'op.jpg', 'T-SHIRT', 20, 1),
('OOPS DOTTED CAMO', 35, 'WHITE/GREEN', '', 'LONG-SLEEVE', 0, 6),
('OOPS GREEN CAMO', 25, 'White/GREEN', '', 'T-SHIRT', 20, 4),
('OOPS GREY CAMO', 25, 'WHITE/GREY', '', 'T-SHIRT', 20, 3),
('OOPS RED CAMO', 25, 'WHITE/RED', '', 'T-SHIRT', 20, 2),
('OOPS WINTER CAMO', 35, 'WHITE/BLACK/GREY', '', 'LONG-SLEEVE', 0, 7),
('OOPS WOMEN PINK CAMO', 25, 'WHITE/PINK', '', 'T-SHIRT', 20, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopapparel`
--
ALTER TABLE `shopapparel`
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
