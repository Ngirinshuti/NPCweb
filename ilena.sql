-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 08:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilena`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `type`) VALUES
(21, 'prudent', 'prudent@gmail.com', '123', 'admin'),
(23, 'theo', 'theo@gmail.com', '123', 'limiteduser'),
(24, 'kambali', 'ser@gmail.com', '123', 'limiteduser');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `rgno` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`rgno`, `fname`, `lname`, `email`, `sex`, `age`, `level`, `class`, `year`, `picture`) VALUES
('NPC2', 'Murokozi', 'jackson', 'jackson@gmail.com', 'male', '2021-06-27', 'Three', 'Computer science ', '2021', 'RWANDA.gif'),
('NPC1', 'Ngirinshuti', 'Prudent', 'prudent@gmail.com', 'M', '100', '3', 'IT', '2021', ''),
('NPC4', 'kambali', 'serge', 'ser@gmail.com', 'male', '2021-08-25', 'Three', 'Computer science ', '2021', '20210726_105333.jpg'),
('NPC3', 'mamba', 'theo', 'theo@gmail.com', 'male', '2021-07-06', 'Three', 'Computer science ', '2021', 'RWANDA.gif');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `idea` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `idea`, `type`) VALUES
(30, 'prudent@gmail.com', 'ANNOUNCEMENT', 'helooo student', 'administration'),
(33, 'theo@gmail.com', 'greatings', 'hey', 'student'),
(34, 'theo@gmail.com', 'Reaction of administration', 'yes hello', 'administration'),
(35, 'prudent@gmail.com', 'Reaction of administration', 'hey', 'administration'),
(36, 'theo@gmail.com', 'Reaction of administration', 'yes admin', 'student'),
(37, 'theo@gmail.com', 'Reaction of administration', 'yes admin', 'student'),
(38, 'theo@gmail.com', 'Reaction of administration', 'yessssss', 'student'),
(39, 'theo@gmail.com', 'Reaction of administration', 'yessssss', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`email`) REFERENCES `class` (`email`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`email`) REFERENCES `class` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
