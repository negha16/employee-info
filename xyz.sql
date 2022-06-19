-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 03:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn_info`
--

CREATE TABLE `admn_info` (
  `USER_NAME` varchar(100) NOT NULL,
  `PASS_WORD` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admn_info`
--

INSERT INTO `admn_info` (`USER_NAME`, `PASS_WORD`) VALUES
('admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `GEN` varchar(15) NOT NULL,
  `ADDR` varchar(200) NOT NULL,
  `MOBL` varchar(10) NOT NULL,
  `ADDR_PROOF` longblob NOT NULL,
  `PASS_WORD` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`ID`, `NAME`, `DOB`, `GEN`, `ADDR`, `MOBL`, `ADDR_PROOF`, `PASS_WORD`) VALUES
(17, 'abc', '2022-06-16', 'Male', 'adAWESdaw', '2353453453', 0x494d475f32303231303831345f3134323832302d636f6e766572746564202831292e646f6378, '6481f8e1a060d56eeb7c10ac7809d316800dce013713c412e1d22076505b11a8'),
(18, 'abcd', '2022-06-29', 'Transgender', 'rdtfhgsergwers', '3464564564', 0x4e4547484120474f50494e4154482e706466, 'efc8fba9489b1d63fb2efe99f2695aa40a8e3ee9c00738145ddd632f8c4c39d2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
