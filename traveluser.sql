-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 01:27 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `traveluser`
--

CREATE TABLE `traveluser` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `State` int(11) DEFAULT NULL,
  `DateJoined` datetime DEFAULT NULL,
  `DateLastModified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traveluser`
--

INSERT INTO `traveluser` (`UID`, `UserName`, `Pass`, `State`, `DateJoined`, `DateLastModified`) VALUES
(1, 'luisg@embraer.com.br', 'abcd1234', 1, '2012-10-08 00:00:00', '2012-11-15 00:00:00'),
(2, 'leonekohler@surfeu.de', 'abcd1234', 1, '2012-08-22 00:00:00', '2012-10-15 00:00:00'),
(3, 'ftremblay@gmail.com', 'abcd1234', 1, '2012-10-28 00:00:00', '2012-11-16 00:00:00'),
(4, 'bjorn.hansen@yahoo.no', 'abcd1234', 1, '2012-07-31 00:00:00', '2012-08-14 00:00:00'),
(5, 'frantisekw@jetbrains.com', 'abcd1234', 1, '2012-08-06 00:00:00', '2012-09-25 00:00:00'),
(6, 'hholy@gmail.com', 'abcd1234', 1, '2012-11-01 00:00:00', '2012-12-14 00:00:00'),
(7, 'astrid.gruber@apple.at', 'abcd1234', 1, '2012-06-05 00:00:00', '2013-01-10 00:00:00'),
(8, 'fharris@google.com', 'abcd1234', 1, '2012-09-25 00:00:00', '2012-11-18 00:00:00'),
(9, 'jacksmith@microsoft.com', 'abcd1234', 1, '2012-11-16 00:00:00', '2013-01-18 00:00:00'),
(10, 'michelleb@aol.com', 'abcd1234', 1, '2012-12-07 00:00:00', '2013-03-07 00:00:00'),
(11, 'tgoyer@apple.com', 'abcd1234', 1, '2013-01-14 00:00:00', '2013-04-19 00:00:00'),
(12, 'robbrown@shaw.ca', 'abcd1234', 1, '2013-02-07 00:00:00', '2013-06-11 00:00:00'),
(13, 'edfrancis@yachoo.ca', 'abcd1234', 1, '2012-12-20 00:00:00', '2013-01-11 00:00:00'),
(14, 'mphilips12@shaw.ca', 'abcd1234', 1, '2012-05-21 00:00:00', '2012-10-28 00:00:00'),
(15, 'marthasilk@gmail.com', 'abcd1234', 1, '2012-11-17 00:00:00', '2012-12-01 00:00:00'),
(16, 'aaronmitchell@yahoo.ca', 'abcd1234', 1, '2013-02-12 00:00:00', '2013-03-21 00:00:00'),
(17, 'ellie.sullivan@shaw.ca', 'abcd1234', 1, '2012-09-10 00:00:00', '2012-11-05 00:00:00'),
(18, 'jfernandes@yahoo.pt', 'abcd1234', 1, '2012-08-27 00:00:00', '2012-09-03 00:00:00'),
(19, 'masampaio@sapo.pt', 'abcd1234', 1, '2012-07-29 00:00:00', '2012-12-10 00:00:00'),
(20, 'hannah.schneider@yahoo.de', 'abcd1234', 1, '2012-08-01 00:00:00', '2012-11-02 00:00:00'),
(21, 'camille.bernard@yahoo.fr', 'abcd1234', 1, '2012-10-29 00:00:00', '2012-12-07 00:00:00'),
(22, 'isabelle_mercier@apple.fr', 'abcd1234', 1, '2012-11-12 00:00:00', '2013-01-21 00:00:00'),
(23, 'emma_jones@hotmail.com', 'abcd1234', 1, '2012-08-27 00:00:00', '2012-10-29 00:00:00'),
(24, 'phil.hughes@gmail.com', 'abcd1234', 1, '2012-07-24 00:00:00', '2012-08-28 00:00:00'),
(25, 'manoj.pareek@rediff.com', 'abcd1234', 1, '2012-09-07 00:00:00', '2013-01-11 00:00:00'),
(26, 'puja_srivastava@yahoo.in', 'abcd1234', 1, '2013-02-01 00:00:00', '2013-05-07 00:00:00'),
(27, 'mark.taylor@yahoo.au', 'abcd1234', 1, '2012-09-17 00:00:00', '2012-11-06 00:00:00'),
(28, 'ricunningham@hotmail.com', 'abcd1234', 1, '2012-08-21 00:00:00', '2012-11-10 00:00:00'),
(29, 'patrick.gray@aol.com', 'abcd1234', 1, '2012-08-27 00:00:00', '2012-08-30 00:00:00'),
(30, 'terhi.hamalainen@apple.fi', 'abcd1234', 1, '2013-01-24 00:00:00', '2013-01-28 00:00:00'),
(31, 'stanisław.wójcik@wp.pl', 'abcd1234', 1, '2012-11-25 00:00:00', '2012-12-13 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traveluser`
--
ALTER TABLE `traveluser`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traveluser`
--
ALTER TABLE `traveluser`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
