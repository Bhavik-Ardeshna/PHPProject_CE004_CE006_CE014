-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2021 at 11:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GoTrip`
--
CREATE DATABASE IF NOT EXISTS `GoTrip` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `GoTrip`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

DROP TABLE IF EXISTS `admin_data`;
CREATE TABLE `admin_data` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`name`, `email`, `password`) VALUES
('arvik_123', 'ardeshnabhavik@gmail.com', 'bhavik'),
('arvik_123', 'ardeshnabhavik@gmail.com', 'bhavik'),
('Bhavik Ardeshna', 'ardeshnabhavik@gmail.com', 'bhavik'),
('Ardeshna', 'ardeshnabhavik@gmail.com', 'bhavik');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

DROP TABLE IF EXISTS `agency`;
CREATE TABLE `agency` (
  `org_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `org_type` varchar(50) COLLATE utf8_bin NOT NULL,
  `bank_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `acc_no` varchar(15) COLLATE utf8_bin NOT NULL,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`org_name`, `email`, `org_type`, `bank_name`, `acc_no`, `location`, `password`) VALUES
('org1', 'o123@g.com', 'benificial', 'Axis bank', 'ACC12345', 'surat', 'o12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- --------------------------------------------------------

--
-- Table structure for table `hotel_data`
--

CREATE TABLE `hotel_data` (
  `hotel_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `contactno` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `hotelimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `state` varchar(50) COLLATE utf8_bin NOT NULL,
  `singlestatus` varchar(12) COLLATE utf8_bin DEFAULT "notpresent",
  `singleprice` INT COLLATE utf8_bin,
  `singleavailable` INT COLLATE utf8_bin,
  `singleimg` varchar(100) COLLATE utf8_bin,
  `doublestatus` varchar(12) COLLATE utf8_bin DEFAULT "notpresent",
  `doubleprice` INT COLLATE utf8_bin,
  `doubleavailable` INT COLLATE utf8_bin,
  `doubleimg` varchar(100) COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;