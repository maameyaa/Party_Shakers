SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE party_shakers;

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
USE party_shakers;

CREATE TABLE `customers` (
  `cno` int(5) NOT NULL,
  `cfirstname` varchar(50) NOT NULL,
  `clastname` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
);
--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cno`, `cfirstname`, `clastname`, `house`, `town`, `region`, `phone`, `email`) VALUES
(1, 'Maame Yaa ', 'Poku', 'AL/5 Comm8', 'Tema', 'Accra', 262323256, 'afriyiepoku@gmail.com'),
(2, 'Tobel', 'Eze-Okoli', 'W44 Comm8', 'Tema', 'Accra', 262323256, 'tobel@gmail.com'),
(3, 'Benedicta', 'Bempah', 'TM46', 'Afienya', 'Tema', 278332792, 'benedicta@gmail.com'),
(4, 'Makafui', 'Fie', '555 E Pershing road', 'Accra', 'GA', 245758392, 'makafui.fie@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--
-- DROP TABLE `employees`;

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
  `eusername` varchar(50) NOT NULL,
  `status` enum('Admin','Regular') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eno`, `efirstname`, `elastname`, `house`, `town`, `region`, `hiredate`, `birthdate`, `phone`, `email`, `gender`, `password`, `eusername`,`status` ) VALUES
(1, 'Kwame', 'Sika', 'Afienya', 'Tema', 'Greater Accra', '2017-01-11', '1990-02-01', 254448883, 'kwame.sika@party_shakers.com', 'MALE', 'kwame', 'kwame.sika','regular'),
(2, 'George', 'Okro', 'Drake', 'Kumasi', 'Greater Accra', '2017-01-11', '1988-03-15', 244333333, 'g@gmail.com', 'MALE', 'george', 'george.okro','regular'),
(3, 'Maame Yaa', 'Afriyie', 'Comm.8', 'Tema', 'Greater Accra', '2011-06-02', '1990-08-23', 208993322, 'maame@party_shakers.com', 'FEMALE', 'maame', 'maame.afriyie','admin'),
(4, 'Olive', 'Ishimirwe', 'Quarter 5', 'Berekuso', 'Eastern Region', '2012-05-23', '1988-07-19', 201118885, 'olive@party_shakers.com', 'FEMALE', 'olive', 'olive.ishimirwe','regular'),
(5, 'Kwabena', 'Bempah', 'Police Station', 'Afienya', 'Eastern Region', '2015-07-23', '1996-11-23', 547778882, 'kwabena@party_shakers.com', 'MALE', 'kwabena', 'kwabena.bempah','regular'),
(6, 'Maame', 'Yaa', 'House1', 'Madina', 'Greater Accra', '2013-09-23', '1991-07-03', 267718812, 'maameyaa@party_shakers.com', 'FEMALE', 'maame', 'maame.yaa', 'regular');
(7, 'Daniel', 'Obiri', 'Shaiman', 'Ashaiman', 'Greater Accra', '2014-10-23', '1989-02-03', 208889991, 'daniel@party_shakers.com', 'FEMALE', 'daniel', 'daniel.obiri','admin'),
(8, 'Jeffrey', 'Twum', 'DoveHills', 'Spintex', 'Greater-Accra', '2015-08-15', '1990-12-24', 267722113, 'jeffrey@party_shakers.com', 'MALE', 'jeffrey', 'jeffrey.twum','admin'),
(9, 'PaaKofi', 'Bempah', 'Station', 'Afienya', 'Greater Accra', '2016-12-11', '2000-02-24', 267788553, 'paakofi@party_shakers.com', 'MALE', 'paakofi', 'paakofi.bempah', 'regular'),
(10, 'Thomas', 'Marcus', 'Goil oil', 'Ashaiman', 'Greater Accra', '2015-04-13', '1985-11-22', 278833771, 'thomas@party_shakers.com', 'MALE', 'thomas', 'thomas.marcus', 'regular'),
(11, 'Fiifi', 'Otoo', 'Market', 'Dome', 'Greater Accra', '2010-09-17', '1985-11-12', 244389211, 'fiifi@party_shakers.com', 'MALE', 'fiifi', 'fiifi.otoo', 'admin'),
(12, 'NanaYaw', 'Bempah', 'Zhejiang', 'Hong Kong', 'Shanghai', '2009-02-22', '1989-06-02', 22846582, 'nanayaw@party_shakers.com', 'MALE', 'nanayaw', 'nanayaw.bempah','regular');

-- --------------------------------------------------------

--
-- Table structure for table `odetails`
--

CREATE TABLE `odetails` (
`odo` int(5) NOT NULL,
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
  `received` enum('Yes','No') NOT NULL,
  `shipped` enum('Yes','No') NOT NULL,
  `shippingdate` date NOT NULL,
  `receivedate` date NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for orders table

INSERT INTO `orders`(`ono`, `cno`, `eno` , `received`, `shipped`, `shippingdate`, `receivedate`, `orderdate`)
 VALUES 
(1, 1, 1, 'Yes', 'Yes' , '2017-03-15', '2017-03-01', '2017-03-07'),
(2, 1, 3, 'No', 'No' , '2017-02-20', '2017-02-10', '2017-02-15'),
(3, 3, 2, 'Yes', 'No' , '2017-04-20', '2017-03-29', '2017-04-10'),
(4, 2, 5, 'Yes', 'No' , '2017-01-15', '2017-01-09', '2017-01-11')
-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `pno` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `qoh` int(5) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `olevel` int(5) NOT NULL,
  `category` enum('Decorations','Costume','Food','Utensils') NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`pno`, `pname`, `qoh`, `price`, `olevel`, `category`, `image`) 
VALUES
(1, 'Ribbon', 50, '2.50', 5, 'Decorations', ''),
(3, 'Cup', 21, '2.00', 0, 'Utensils', ''),
(4, 'Chips', 40, '3.00', 10, 'Food', ''),
(5, 'Balloons', 40, '5.00', 10, 'Decorations', ''),
(6, 'Wine', 50, '20.00', 10, 'Food', ''),
(7, 'Streamer', 40, '3.00', 10, 'Decorations', '')
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
  MODIFY `cno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ono` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `pno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;