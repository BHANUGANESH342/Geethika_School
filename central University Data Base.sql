-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 09:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geethika_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `accept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S_NO`, `Name`, `email`, `mobile`, `subject`, `message`, `accept`) VALUES
(1, 'Bhavani', 'ananya_csd@srkrec.edu.in', '9052727402', 'Good', 'You are doing good But you have some weekness to cover', 'I agree to the terms and privacy policy.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `S_NO` int(11) NOT NULL,
  `stdNam` varchar(60) NOT NULL,
  `admClas` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `stdAdhr` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccup` varchar(50) NOT NULL,
  `fadhr` varchar(20) NOT NULL,
  `fmob` varchar(15) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccup` varchar(50) NOT NULL,
  `madhr` varchar(20) NOT NULL,
  `mmob` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `preschool` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`S_NO`, `stdNam`, `admClas`, `gender`, `stdAdhr`, `fname`, `foccup`, `fadhr`, `fmob`, `mname`, `moccup`, `madhr`, `mmob`, `email`, `preschool`) VALUES
(1, 'Shiva', '8th', 'male', '540863481745', 'Visvashwara Sharama', 'Head of the all', '540863481745', '1000', 'Bhavani', 'Food for all ', '540863481745', '1', 'thapasu', 'anushachennamsetti16@gmail.com'),
(2, 'Shiva', '8th', 'male', '540863481745', 'Visvashwara Sharama', 'Head of the all', '540863481745', '1000', 'Bhavani', 'Food for all ', '540863481745', '1', 'thapasu', 'anushachennamsetti16@gmail.com'),
(3, 'Shiva', '8th', 'male', '540863481745', 'Visvashwara Sharama', 'Head of the all', '540863481745', '1000', 'Bhavani', 'Food for all ', '540863481745', '1', 'thapasu', 'anushachennamsetti16@gmail.com'),
(4, 'Srujan Chitturi', '1st', 'male', '7842353004', 'Karthik Chitturi', 'Web Devloper', '8328283399', '9398954816', 'Mrs.Karthik', 'Designer', '9398954816', '7842353004', 'Aditya school', 'srujanchitturi143@sweetfamily.com'),
(5, 'Ganesh', '4th', 'male', '12546354521', 'Shiva', 'Head of All', '1111111111111111', '1000', 'Bhavani', 'Food for all', '121212121212', '1', 'Bhavani', 'ananya_csd@srkrec.edu.in'),
(6, 'Mani Kanta', '8th', 'male', '12546354521', 'Shiva', 'Head of All Things', '1111111111111111', '1000', 'Bhavani', 'Food for all', '121212121212', '1', 'Bhavani', 'ravikumar_csd@srkrec.edu.in'),
(7, 'Mani Kanta', '8th', 'male', '12546354521', 'Shiva', 'Head of All Things', '1111111111111111', '1000', 'Bhavani', 'Food for all', '121212121212', '1', 'Bhavani', 'ravikumar_csd@srkrec.edu.in'),
(8, 'Gowtham', '8th', 'male', '6544545', '', '', '', '', '', '', '', '', '', ''),
(9, 'Gowtham', '8th', 'male', '6544545', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`S_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
