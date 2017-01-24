-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2017 at 02:36 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `party_shakers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cno` int(5) NOT NULL,
  `cfirstname` varchar(50) NOT NULL,
  `clastname` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eno` int(5) NOT NULL,
  `efirstname` varchar(50) NOT NULL,
  `elastname` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `hiredate` date NOT NULL,
  `birthdate` date NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `password` varchar(50) NOT NULL,
  `eusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odetails`
--

CREATE TABLE `odetails` (
  `ono` int(5) NOT NULL,
  `pno` int(5) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ono` int(5) NOT NULL,
  `cno` int(5) NOT NULL,
  `eno` int(5) NOT NULL,
  `received` date NOT NULL,
  `shipped` enum('YES','NO') NOT NULL,
  `shippingdate` date NOT NULL,
  `receivedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `pno` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `qoh` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `olevel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `odetails`
--
ALTER TABLE `odetails`
  ADD PRIMARY KEY (`ono`,`pno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ono`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cno` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eno` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ono` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `pno` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
