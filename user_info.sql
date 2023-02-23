-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 05:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `Name`, `Email`, `Message`, `Date`, `Status`) VALUES
(20230245, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'Hi there ', '2023-02-23', ''),
(20230265, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi today is monday', '2023-02-23', ''),
(20230267, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi today is monday', '2023-02-23', ''),
(20230268, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi today is monday', '2023-02-23', ''),
(20230269, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi today is monday', '2023-02-23', ''),
(20230270, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi today is monday', '2023-02-23', ''),
(20230271, 'Nitesh Chauhan', 'niteshchauhan8285@gmail.com', 'hi there', '2023-03-02', ''),
(20230272, 'Nitesh Chauhan', 'hrns5140@gmail.com', 'Hi there How are you', '2023-02-23', ''),
(20230273, 'Nitesh Chauhan', 'hrns5140@gmail.com', 'Hi there How are you', '2023-02-23', ''),
(20230274, 'Nitesh Chauhan', 'hrns5140@gmail.com', 'Hi there How are you', '2023-02-23', ''),
(20230275, 'Nitesh Chauhan', 'hrns5140@gmail.com', 'hi', '2023-03-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230277;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
