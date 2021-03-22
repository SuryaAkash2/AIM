-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 08:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `networks`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sno` int(11) NOT NULL,
  `date` varchar(225) NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `block` varchar(225) NOT NULL,
  `mba/diplomabranch` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sno`, `date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`, `department`, `status`, `block`, `mba/diplomabranch`, `datm`) VALUES
(1, '', '', '', '', '', '', '---SELECT---', 'ECE', 'PENDING', 'Ablock', '', '2020-02-23 11:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `cate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `user`, `pass`, `cate`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'faculty', 'faculty', 'faculty'),
(3, 'security', 'security', 'security'),
(4, 'ECE', 'block', 'departmentadmin'),
(5, 'IT', 'block', 'departmentadmin'),
(6, 'EEE', 'block', 'departmentadmin'),
(7, 'CSE', 'block', 'departmentadmin'),
(8, 'MECH', 'block', 'departmentadmin'),
(9, 'CIVIL', 'block', 'departmentadmin'),
(10, 'MBA', 'block', 'departmentadmin'),
(11, 'DIPLOMA', 'block', 'departmentadmin');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `sno` int(11) NOT NULL,
  `date` varchar(225) NOT NULL,
  `facid` varchar(225) NOT NULL,
  `item` varchar(225) NOT NULL,
  `qty` varchar(225) NOT NULL,
  `expp` varchar(225) NOT NULL,
  `priority` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reason` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`sno`, `date`, `facid`, `item`, `qty`, `expp`, `priority`, `status`, `datm`, `reason`) VALUES
(1, '', '', '', '', '', 'SECONADARY', 'accept', '2020-02-23 11:00:55', '');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `sno` int(11) NOT NULL,
  `date` varchar(225) NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `ward` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`sno`, `date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`, `status`, `ward`, `datm`) VALUES
(1, '', '', '', '', '', '', '---SELECT---', 'accept', 'inward', '2020-02-23 11:01:18'),
(2, '2020-02-22', '1', '4', 'r', '', '', '---SELECT---', 'accept', 'inward', '2020-02-24 07:56:43'),
(3, '', '', '', '', '', '', '---SELECT---', 'accepted', 'outward', '2020-02-24 07:56:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
