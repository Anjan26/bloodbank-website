-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 04:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'admin', '2020-08-20 19:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE `blooddonor` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Gender`, `Age`, `BloodGroup`, `Address`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Anjan Guha', '7031408444', 'guha.anjan0@gmail.com', 'Male', 26, 'O+', 'Kolkata', 'I am interested to donate.', '2020-08-12 19:45:16', 1),
(2, 'Sidhant Kanwar', '61403887777', 'kanwarsid112@gmail.com', 'Male', 25, 'A+', 'Dharamshala', 'You are doing a great job!', '2020-08-12 20:00:11', 1),
(3, 'Aarti Patel', '9744451945', 'paarti30@gmail.com', 'Female', 22, 'B+', 'Cuttack, Odissa', 'I am interested to donate.', '2020-08-12 20:09:21', 1),
(4, 'Jaydeep Mazumder', '7978203744', 'jaydeepm2019@gmail.com', 'Male', 22, 'A-', 'Baripada', 'Now its become easy to get blood and also to donate blood.', '2020-08-12 20:21:42', 1),
(25, 'Amit Shah', '0000022222', 'shah@gmail.com', 'Male ', 32, 'AB-', 'Kolkata', 'Interested', '2020-08-24 16:04:54', 1),
(26, 'Abhishek kumar', '0123456892', 'k@gmail.com', 'Male ', 19, 'O-', 'Pune', 'Willing to donate.', '2020-08-24 16:30:25', 1),
(27, 'Hema Khan', '7894562310', 'Khn@gmail.com', 'Female ', 45, 'B-', 'bangalore', 'i want to donate.', '2020-08-24 16:31:37', 1),
(28, 'Anil Kumble', '6332540895', 'anil@gmail.com', 'Male ', 58, 'AB+', 'Bihar', 'I am Up.', '2020-08-24 16:33:15', 1),
(29, 'Sachin Tendulkar', '9999912305', 'champ@gmail.com', 'Male ', 26, 'AB-', 'Tamil nadu', 'Interested', '2020-08-24 16:34:17', 1),
(30, 'raj', '01234567890', 'raj@gmail.com', 'Male ', 23, 'O-', 'kolkata', 'interested', '2020-08-28 04:39:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(1, 'A+', '2020-08-12 21:20:50'),
(2, 'A-', '2020-08-12 21:20:50'),
(3, 'B+', '2020-08-12 21:20:50'),
(4, 'B-', '2020-08-12 21:20:50'),
(5, 'O+', '2020-08-12 21:20:50'),
(6, 'O-', '2020-08-12 21:20:50'),
(7, 'AB+', '2020-08-13 14:16:19'),
(8, 'AB-', '2020-08-13 14:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `contactusquery`
--

CREATE TABLE `contactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusquery`
--

INSERT INTO `contactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(36, 'Anjan Guha', 'guha.anjan0@gmail.com', '7031408444', 'Is there any camp you organise?', '2020-08-24 16:35:30', NULL),
(37, 'Aarti Patel', 'patel@gmail.com', '9586452203', 'Do you have any central office?', '2020-08-24 16:36:22', NULL),
(38, 'Amresh Kumar ', 'amresh@gmail.com', '9122501766', 'Love to work with you?', '2020-08-24 16:37:50', NULL),
(39, 'Sidhant Kanwar', 'kanwar21@yahoo.com', '02221458796', 'unable to contact over the numbers you have provided?\r\ni have send an email please do check and response.', '2020-08-24 16:39:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusquery`
--
ALTER TABLE `contactusquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blooddonor`
--
ALTER TABLE `blooddonor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactusquery`
--
ALTER TABLE `contactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
