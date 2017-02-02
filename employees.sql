-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2017 at 07:09 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `party_Shakers`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `eno` int(5) NOT NULL AUTO_INCREMENT,
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
  `eusername` varchar(50) NOT NULL,
  PRIMARY KEY (`eno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eno`, `efirstname`, `elastname`, `house`, `town`, `region`, `hiredate`, `birthdate`, `phone`, `email`, `gender`, `password`, `eusername`) VALUES
(1, 'Kwame', 'Sika', 'Afienya', 'Tema', 'Greater Accra', '2017-01-11', '1990-02-01', 254448883, 'kwame.sika@party_shakers.com', 'MALE', 'kwame', 'kwame.sika'),
(2, 'George', 'Okro', 'Drake', 'Kumasi', 'Greater Accra', '2017-01-11', '1988-03-15', 244333333, 'g@gmail.com', 'MALE', 'george', 'george.okro'),
(3, 'Maame Yaa', 'Afriyie', 'Comm.8', 'Tema', 'Greater Accra', '2011-06-02', '1990-08-23', 208993322, 'maame@party_shakers.com', 'FEMALE', 'maame', 'maame.afriyie'),
(4, 'Olive', 'Ishimirwe', 'Quarter 5', 'Berekuso', 'Eastern Region', '2012-05-23', '1988-07-19', 201118885, 'olive@party_shakers.com', 'FEMALE', 'olive', 'olive.ishimirwe'),
(5, 'Kwabena', 'Bempah', 'Police Station', 'Afienya', 'Eastern Region', '2015-07-23', '1996-11-23', 547778882, 'kwabena@party_shakers.com', 'MALE', 'kwabena', 'kwabena.bempah'),
(6, 'Maame', 'Yaa', 'House1', 'Madina', 'Greater Accra', '2013-09-23', '1991-07-03', 267718812, 'maameyaa@party_shakers.com', 'FEMALE', 'maame', 'maame.yaa'),
(7, 'Daniel', 'Obiri', 'Shaiman', 'Ashaiman', 'Greater Accra', '2014-10-23', '1989-02-03', 208889991, 'daniel@party_shakers.com', 'FEMALE', 'daniel', 'daniel.obiri'),
(8, 'Jeffrey', 'Twum', 'DoveHills', 'Spintex', 'Greater-Accra', '2015-08-15', '1990-12-24', 267722113, 'jeffrey@party_shakers.com', 'MALE', 'jeffrey', 'jeffrey.twum'),
(9, 'PaaKofi', 'Bempah', 'Station', 'Afienya', 'Greater Accra', '2016-12-11', '2000-02-24', 267788553, 'paakofi@party_shakers.com', 'MALE', 'paakofi', 'paakofi.bempah'),
(10, 'Thomas', 'Marcus', 'Goil oil', 'Ashaiman', 'Greater Accra', '2015-04-13', '1985-11-22', 278833771, 'thomas@party_shakers.com', 'MALE', 'thomas', 'thomas.marcus'),
(11, 'Fiifi', 'Otoo', 'Market', 'Dome', 'Greater Accra', '2010-09-17', '1985-11-12', 244389211, 'fiifi@party_shakers.com', 'MALE', 'fiifi', 'fiifi.otoo'),
(12, 'NanaYaw', 'Bempah', 'Zhejiang', 'Hong Kong', 'Shanghai', '2009-02-22', '1989-06-02', 22846582, 'nanayaw@party_shakers.com', 'MALE', 'nanayaw', 'nanayaw.bempah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
