-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 05:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `type`) VALUES
(1, 'Bills', 'Expense'),
(2, 'Salary', 'Expense'),
(3, 'Donations', 'Asset'),
(4, 'Cash', 'Asset'),
(5, 'Bank', 'Asset'),
(6, 'Sale', 'Revenue');

-- --------------------------------------------------------

--
-- Table structure for table `chartofacc`
--

CREATE TABLE `chartofacc` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `groud_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `date_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `paid_to` varchar(50) NOT NULL,
  `paid_by` varchar(50) NOT NULL,
  `date_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `formula` varchar(50) NOT NULL,
  `mfg_on` varchar(50) NOT NULL,
  `exp_on` varchar(50) NOT NULL,
  `add_on` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `formula`, `mfg_on`, `exp_on`, `add_on`, `qty`, `added_by`) VALUES
(1, 'medicine', 'formula', '', '2025-03-25', '', '150', '2'),
(2, '', '', '', '', '', '', '2'),
(3, 'medicine 2', 'formula 2', '', '2025-03-25', '', '20', '2'),
(4, 'medicine 2', 'formula 3', '', '2025-03-25', '', '20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `paitent`
--

CREATE TABLE `paitent` (
  `id` int(10) NOT NULL,
  `pat_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `check_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paitent`
--

INSERT INTO `paitent` (`id`, `pat_id`, `name`, `father`, `age`, `gender`, `type`, `check_on`) VALUES
(1, '1', 'Patient 1', 'father 1', '30-40', 'male', 'new', '12-06-2021'),
(2, '1', 'Patient 2', 'father 2', '30-40', 'male', 'new', '12-06-2021'),
(3, '2', 'sj', 'nvbn', '20-30', 'female', 'new', '12-06-2021'),
(4, '3', 'sjoj', 'lkjlkj', '20-30', 'female', 'new', '12-06-2021'),
(5, '4', 'ls;djk', 'lkjlkj', '20-30', 'female', 'new', '12-06-2021'),
(6, '5', 'Ali Yousaf', 'Muhammad Yousaf', '20-30', 'male', 'new', '18-06-2021');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `trans_vou` varchar(50) NOT NULL,
  `trans_num` varchar(50) NOT NULL,
  `trans_debit` varchar(50) NOT NULL,
  `trans_credit` varchar(50) NOT NULL,
  `trans_amnt` varchar(50) NOT NULL,
  `trans_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `date_on`) VALUES
(1, 'root', 'root', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', '18-06-2021'),
(2, 'root', 'root', '63a9f0ea7bb98050796b649e85481845', 'admin', '18-06-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartofacc`
--
ALTER TABLE `chartofacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paitent`
--
ALTER TABLE `paitent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chartofacc`
--
ALTER TABLE `chartofacc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paitent`
--
ALTER TABLE `paitent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
