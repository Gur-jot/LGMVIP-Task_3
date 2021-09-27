-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.1.2
-- Generation Time: Sep 25, 2021 at 12:58 PM
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
-- Database: `gurunank`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Sno` int(55) NOT NULL,
  `Roll` int(3) NOT NULL,
  `CLASS` varchar(6) NOT NULL,
  `Subject1` varchar(15) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Subject2` varchar(15) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Subject3` varchar(15) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Subject4` varchar(15) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Subject5` varchar(15) NOT NULL,
  `Marks5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Sno`, `Roll`, `CLASS`, `Subject1`, `Marks1`, `Subject2`, `Marks2`, `Subject3`, `Marks3`, `Subject4`, `Marks4`, `Subject5`, `Marks5`) VALUES
(12, 1, '1 A', 'English', 99, 'Hindi', 87, 'Science', 90, 'Computer', 89, 'GK', 100),
(13, 2, '1 B', 'English', 99, 'Hindi', 89, 'Science', 97, 'Computer', 100, 'GK', 100),
(14, 3, '1 C', 'English', 85, 'Hindi', 100, 'Science', 99, 'Computer', 94, 'DS', 80),
(15, 4, '2 A', 'English', 94, 'Hindi', 98, 'Science', 92, 'Computer', 89, 'DS', 96),
(16, 5, '2 B', 'English', 100, 'Hindi', 99, 'Science', 90, 'Computer', 97, 'GK', 90),
(17, 6, '2 C', 'English', 100, 'Hindi', 89, 'Science', 99, 'Computer', 80, 'GK', 100),
(18, 7, '3 A', 'English', 89, 'Hindi', 34, 'Science', 98, 'Computer', 78, 'GK', 67),
(19, 8, '3 B', 'English', 67, 'Hindi', 90, 'Science', 100, 'Computer', 67, 'GK', 98),
(20, 9, '3 C', 'English', 99, 'Hindi', 100, 'Science', 100, 'Computer', 100, 'GK', 100);

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `S_no` int(11) NOT NULL,
  `name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`S_no`, `name`) VALUES
(20, '1 A'),
(25, '1 B'),
(28, '1 C'),
(57, '10 A'),
(58, '10 B'),
(59, '10 C'),
(60, '11 A'),
(61, '11 B'),
(62, '11 C'),
(63, '12 A'),
(64, '12 B'),
(65, '12 C'),
(29, '2 A'),
(30, '2 B'),
(32, '2 C'),
(33, '3 A'),
(35, '3 B'),
(36, '3 C'),
(37, '4 A'),
(39, '4 B'),
(40, '4 C'),
(41, '5 A'),
(42, '5 B'),
(43, '5 C'),
(44, '6 A'),
(45, '6 B'),
(46, '6 C'),
(47, '7 A'),
(48, '7 B'),
(49, '7 C'),
(50, '8 A'),
(51, '8 B'),
(52, '8 C'),
(53, '9 A'),
(54, '9 B'),
(56, '9 C');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Sno` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `roll` int(2) NOT NULL,
  `class` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Sno`, `name`, `roll`, `class`) VALUES
(36, 'Ayush Singh', 1, '1 A'),
(37, 'Deepak ', 2, '1 B'),
(38, 'Anjali Kumari', 3, '1 C'),
(39, 'Nishi Singh', 4, '2 A'),
(40, 'Nihal', 5, '2 B'),
(41, 'Akansha Kumari', 6, '2 C'),
(42, 'Rama Singh', 7, '3 A'),
(43, 'Aditya Singh', 8, '3 B'),
(44, 'Anurag Singh', 9, '3 C'),
(45, 'Shruti Singh', 10, '4 A'),
(46, 'Utsav Singh', 11, '4 B'),
(47, 'Namrata Singh', 12, '4 C'),
(48, 'Aditi Singh', 13, '5 A'),
(49, 'Pushkar Singh', 14, '5 B'),
(50, 'Pushkar Singh', 14, '5 B'),
(51, 'Nishant Singh', 15, '5 C'),
(52, 'Riya Singh', 16, '6 A'),
(53, 'Nidhi Singh', 17, '6 A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `designation`, `userid`, `Password`) VALUES
('ADMIN', 'admin', 'admin', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD UNIQUE KEY `Sno` (`Sno`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`S_no`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `Sno` (`Sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Sno` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;