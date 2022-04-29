-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipwhitelisting`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog_tbl`
--

CREATE TABLE `activitylog_tbl` (
  `id` int(10) NOT NULL,
  `ipaddress` varchar(255) DEFAULT NULL,
  `browserType` varchar(255) DEFAULT NULL,
  `browserVersion` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `dateTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylog_tbl`
--

INSERT INTO `activitylog_tbl` (`id`, `ipaddress`, `browserType`, `browserVersion`, `page`, `dateTime`) VALUES
(7, '::1', '', '', 'Index', '2022-04-05 14:53:10'),
(8, '::1', '', '', 'Index', '2022-04-05 14:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `firstName`, `lastName`, `emailAddress`, `password`, `dateCreated`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '11111', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddress_tbl`
--

CREATE TABLE `ipaddress_tbl` (
  `id` int(10) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `isAllowed` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipaddress_tbl`
--

INSERT INTO `ipaddress_tbl` (`id`, `ipaddress`, `isAllowed`, `dateCreated`, `createdBy`) VALUES
(2, '192.168.41.14', 'Yes', '2022-04-05 12:20:19', '1'),
(5, '::1', 'Yes', '2022-04-05 13:24:32', '1'),
(8, '192.168.41.13', 'Yes', '2022-04-05 14:32:42', '1'),
(9, '127.0.0.1', 'Yes', '2022-04-05 14:33:17', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog_tbl`
--
ALTER TABLE `activitylog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddress_tbl`
--
ALTER TABLE `ipaddress_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog_tbl`
--
ALTER TABLE `activitylog_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipaddress_tbl`
--
ALTER TABLE `ipaddress_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
