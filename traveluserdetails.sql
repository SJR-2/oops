-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 01:29 AM
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
-- Table structure for table `traveluserdetails`
--

CREATE TABLE `traveluserdetails` (
  `UID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Postal` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Privacy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traveluserdetails`
--

INSERT INTO `traveluserdetails` (`UID`, `FirstName`, `LastName`, `Address`, `City`, `Region`, `Country`, `Postal`, `Phone`, `Email`, `Privacy`) VALUES
(1, 'Luís', 'Gonçalves', 'Av. Brigadeiro Faria Lima, 2170', 'São José dos Campos', 'SP', 'Brazil', '12227-000', '+55 (12) 3923-5555', 'luisg@embraer.com.br', '1'),
(2, 'Leonie', 'Köhler', 'Theodor-Heuss-Straße 34', 'Stuttgart', NULL, 'Germany', '70174', '+49 0711 2842222', 'leonekohler@surfeu.de', '1'),
(3, 'Bjørn', 'Hansen', 'Ullevålsveien 14', 'Oslo', NULL, 'Norway', '0171', '+47 22 44 22 22', 'bjorn.hansen@yahoo.no', '1'),
(4, 'François', 'Tremblay', '1498 rue Bélanger', 'Montréal', 'QC', 'Canada', 'H2G 1A7', '+1 (514) 721-4711', 'ftremblay@gmail.com', '1'),
(5, 'František', 'Wichterlová', 'Klanova 9/506', 'Prague', NULL, 'Czech Republic', '14700', '+420 2 4172 5555', 'frantisekw@jetbrains.com', '2'),
(6, 'Astrid', 'Gruber', 'Rotenturmstraße 4, 1010 Innere Stadt', 'Vienna', NULL, 'Austria', '1010', '+43 01 5134505', 'astrid.gruber@apple.at', '1'),
(7, 'Helena', 'Holý', 'Rilská 3174/6', 'Prague', NULL, 'Czech Republic', '14300', '+420 2 4177 0449', 'hholy@gmail.com', '2'),
(8, 'Frank', 'Harris', '1600 Amphitheatre Parkway', 'Mountain View', 'CA', 'USA', '94043-1351', '+1 (425) 882-8080', 'fharris@google.com', '1'),
(9, 'Jack', 'Smith', '1 Microsoft Way', 'Redmond', 'WA', 'USA', '98052-8300', '+1 (425) 882-8080', 'jacksmith@microsoft.com', '2'),
(10, 'Michelle', 'Brooks', '627 Broadway', 'New York', 'NY', 'USA', '10012-2612', '+1 (212) 221-3546', 'michelleb@aol.com', '1'),
(11, 'Tim', 'Goyer', '1 Infinite Loop', 'Cupertino', 'CA', 'USA', '95014', '+1 (408) 996-1010', 'tgoyer@apple.com', '1'),
(12, 'Robert', 'Brown', '796 Dundas Street West', 'Toronto', 'ON', 'Canada', 'M6J 1V1', '+1 (416) 363-8888', 'robbrown@shaw.ca', '2'),
(13, 'Edward', 'Francis', '230 Elgin Street', 'Ottawa', 'ON', 'Canada', 'K2P 1L7', '+1 (613) 234-3322', 'edfrancis@yachoo.ca', '2'),
(14, 'Mark', 'Philips', '8210 111 ST NW', 'Edmonto', 'AB', 'Canada', 'T6G 2C7', '+1 (780) 434-4554', 'mphilips12@shaw.ca', '1'),
(15, 'Martha', 'Silk', '194A Chain Lake Drive', 'Halifax', 'NS', 'Canada', 'B3S 1C5', '+1 (902) 450-0450', 'marthasilk@gmail.com', '1'),
(16, 'Aaron', 'Mitchell', '696 Osborne Street', 'Winnipeg', 'MB', 'Canada', 'R3L 2B9', '+1 (204) 452-6452', 'aaronmitchell@yahoo.ca', '2'),
(17, 'Ellie', 'Sullivan', '5112 48 Street', 'Yellowknife', 'NT', 'Canada', 'X1A 1N6', '+1 (867) 920-2233', 'ellie.sullivan@shaw.ca', '2'),
(18, 'João', 'Fernandes', 'Rua da Assunção 53', 'Lisbon', NULL, 'Portugal', NULL, '+351 (213) 466-111', 'jfernandes@yahoo.pt', '2'),
(19, 'Madalena', 'Sampaio', 'Rua dos Campeões Europeus de Viena, 4350', 'Porto', NULL, 'Portugal', NULL, '+351 (225) 022-448', 'masampaio@sapo.pt', '2'),
(20, 'Hannah', 'Schneider', 'Tauentzienstraße 8', 'Berlin', NULL, 'Germany', '10789', '+49 030 26550280', 'hannah.schneider@yahoo.de', '1'),
(21, 'Camille', 'Bernard', '4, Rue Milton', 'Paris', NULL, 'France', '75009', '+33 01 49 70 65 65', 'camille.bernard@yahoo.fr', '1'),
(22, 'Isabelle', 'Mercier', '68, Rue Jouvence', 'Dijon', NULL, 'France', '21000', '+33 03 80 73 66 99', 'isabelle_mercier@apple.fr', '1'),
(23, 'Emma', 'Jones', '202 Hoxton Street', 'London', NULL, 'United Kingdom', 'N1 5LH', '+44 020 7707 0707', 'emma_jones@hotmail.com', '1'),
(24, 'Phil', 'Hughes', '113 Lupus St', 'London', NULL, 'United Kingdom', 'SW1V 3EN', '+44 020 7976 5722', 'phil.hughes@gmail.com', '1'),
(25, 'Manoj', 'Pareek', '12,Community Centre', 'Delhi', NULL, 'India', '110017', '+91 0124 39883988', 'manoj.pareek@rediff.com', '1'),
(26, 'Puja', 'Srivastava', '3,Raj Bhavan Road', 'Bangalore', NULL, 'India', '560001', '+91 080 22289999', 'puja_srivastava@yahoo.in', '2'),
(27, 'Mark', 'Taylor', '421 Bourke Street', 'Sidney', 'NSW', 'Australia', '2010', '+61 (02) 9332 3633', 'mark.taylor@yahoo.au', '1'),
(28, 'Richard', 'Cunningham', '2211 W Berry Street', 'Fort Worth', 'TX', 'USA', '76110', '+1 (817) 924-7272', 'ricunningham@hotmail.com', '1'),
(29, 'Patrick', 'Gray', '1033 N Park Ave', 'Tucson', 'AZ', 'USA', '85719', '+1 (520) 622-4200', 'patrick.gray@aol.com', '2'),
(30, 'Terhi', 'Hämäläinen', 'Porthaninkatu 9', 'Helsinki', NULL, 'Finland', '00530', '+358 09 870 2000', 'terhi.hamalainen@apple.fi', '2'),
(31, 'Stanisław', 'Wójcik', 'Ordynacka 10', 'Warsaw', NULL, 'Poland', '00-358', '+48 22 828 37 39', 'stanisław.wójcik@wp.pl', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traveluserdetails`
--
ALTER TABLE `traveluserdetails`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
