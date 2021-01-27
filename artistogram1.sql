-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 06:52 PM
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
-- Database: `artistogram1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `aid` int(10) NOT NULL,
  `cate` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `discript` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`aid`, `cate`, `address`, `discript`, `username`) VALUES
(2, 'dancer', 'ekejnkj3nwk', '3hrjekjnkej', 'Dhanya');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `others` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `ename`, `date`, `venue`, `time`, `others`, `username`) VALUES
(1, 'pranathi', '2021-01-30', 'Konankunte', '15:00:00', 'No Payment details', 'Dhanya V'),
(2, 'Srujana', '2021-02-07', 'Padmanadh Nagar', '15:00:00', 'No Payment details', 'Dhan'),
(3, 'prekshak', '2021-01-30', 'Gorguntepalaya', '18:00:00', 'Payment to be gone to organizer on spot', 'Bhat'),
(7, 'ads', '2021-02-05', 'kjnrfjk', '22:50:00', 'mnbmnbmnb', 'Dhanya'),
(8, 'klsflk', '2021-02-05', 'dnfkm', '22:49:00', 'rdkfkl', 'Dhanya'),
(9, 'abcde', '2021-02-06', 'kkcross', '03:11:00', 'kdrgnkj', 'KP');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `fname`, `lname`, `phno`, `email`, `password`, `category`) VALUES
('Bhat', 'Dhanya', 'V Bhat', 8105432083, 'vbhat@gmail.com', '123', 'Artist'),
('Dhan', 'Dhanya', 'V Bhat', 8105432083, 'dhan@gmail.com', '123', 'Artist'),
('Dhanya', 'Dhanya', 'V Bhat', 8105432083, 'dhanyavbhat@gmail.com', '123', 'Artist'),
('Dhanya V', 'Dhanya', 'V Bhat', 8105432083, 'dhanyav@gmail.com', '123', 'Organizer'),
('Dhanya V Bhat', 'Dhanya', 'V Bhat', 8105432083, 'dhanyavbhat123@gmail.com', '123', 'User'),
('KP', 'Karthik', 'Pranav', 9876543210, 'kp@gmail.com', '123', 'Artist'),
('Navya', 'Navya', 'p', 1234567890, 'navyap@gmail.com', '123', 'Artist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register` (`username`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
