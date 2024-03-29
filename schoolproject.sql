-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 12:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(38) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Sree', 'sree.21mic7058@vitapstudent.ac.in', 2147483647, 'gggg'),
(12, 'asdfghj', 'asdfg@gmail.com', 2147483647, 'asdfghjxcvbnmdfgh'),
(13, 'qwerty', 'sere@gmail.com', 1234567, 'asdfghj'),
(14, 'mtech', 'mtech@gmail.com', 1234567, 'mtech'),
(15, 'mkothiiuiiu', 'ss@gmail.com', 123456, 'asdfghjhgfd'),
(16, 'Sree', 'sreethopuri@gmail.com', 2147483647, 'zxcvbnmasdfghjk'),
(17, 'suma', 'sreethopuri@gmail.com', 2147483647, 'asdfghjxcvbnmsdfgh'),
(18, 'sowmya', 'sreethopuri@gmail.com', 2147483647, 'sdfghjsxcvbndfghj'),
(19, 'Sree', 'sreethopuri@gmail.com', 2147483647, 'asdfgh2345678fghjk'),
(20, 'sdfghjk', 'gayatri@gmail.com', 2147483647, 'drtfgyhuijdfgh'),
(21, 'sai', 'dssdfghgfdsa@gmail.com', 2147483647, 'sdfgvhbnikjmndsa');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(20) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `Specialization Areas` varchar(40) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `Specialization Areas`, `image`) VALUES
(1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty1`
--

CREATE TABLE `faculty1` (
  `id` int(40) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Specialization` varchar(60) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `reg_no` int(50) NOT NULL,
  `semester_no` int(50) DEFAULT NULL,
  `cat_no` int(60) DEFAULT NULL,
  `subject` varchar(70) DEFAULT NULL,
  `marks_obtained` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`reg_no`, `semester_no`, `cat_no`, `subject`, `marks_obtained`) VALUES
(1, 3, 1, 'HCI', 50),
(2, 3, 1, 'HCI', 40),
(7058, 3, 1, 'HCI', 50);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `reg_no` int(40) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `department` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`reg_no`, `name`, `department`) VALUES
(1, 'NAVYA', 'ECE'),
(7058, 'SREE', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 123456789, 'admin@gmail.com', 'admin', '12345'),
(2, 'student', 987654321, 'student@gmail.com', 'student', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty1`
--
ALTER TABLE `faculty1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty1`
--
ALTER TABLE `faculty1`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `reg_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7059;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `reg_no` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7060;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
