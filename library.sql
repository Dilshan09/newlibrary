-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 04:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `user`, `password`) VALUES
(70, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `newbook`
--

CREATE TABLE `newbook` (
  `isbn` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quentity` int(4) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newbook`
--

INSERT INTO `newbook` (`isbn`, `title`, `year`, `publisher`, `category`, `quentity`, `author`) VALUES
(2, 's', '2024-02-07', 'ss', 's', 1, 's'),
(3, 'c', '2024-02-23', 'c', 'c', 2, 'e'),
(5, 'j', '2024-02-01', 'j', 'j', 7, 'hd'),
(7, 'x', '2024-03-01', 'x', 'x', 2, 'x'),
(23, 'r', '2024-02-22', 'e', 'e', 3, '3'),
(29, 'd', '2024-02-29', 'd', 'd', 3, 'f'),
(212, 'fv', '2024-02-13', 'd', 'f', 2, 'ee'),
(1234, 'e', '2024-02-21', 'e', 'e', 2, 'e'),
(2123, 'edrf', '2024-02-21', 'v ', 'erf', 2, 'f'),
(2345, 'r', '2024-02-27', 'r', 'r', 4, 'r'),
(2523, 'we', '2024-02-06', 'sd', 'df', 2, 'we'),
(12323, 'fv', '2024-02-22', 'vc', 'cc', 3, '3e'),
(9999999, 'w', '2024-02-14', 'w', 's', 2, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `newborrow`
--

CREATE TABLE `newborrow` (
  `student` varchar(10) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newborrow`
--

INSERT INTO `newborrow` (`student`, `isbn`, `title`, `date`) VALUES
('21', '15', 'f', '2024-02-24'),
('3', '6', 'c', '2024-02-22'),
('5', '6', 's', '2024-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `newreturn`
--

CREATE TABLE `newreturn` (
  `student` varchar(50) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newreturn`
--

INSERT INTO `newreturn` (`student`, `isbn`, `title`, `date`) VALUES
('5', '77', 'eeee', '2024-02-24'),
('7', '8', 'z', '2024-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `newbook`
--
ALTER TABLE `newbook`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `newborrow`
--
ALTER TABLE `newborrow`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `newreturn`
--
ALTER TABLE `newreturn`
  ADD PRIMARY KEY (`student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
