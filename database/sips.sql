-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sips`
--

-- --------------------------------------------------------

--
-- Table structure for table `generated_id_cards`
--

CREATE TABLE `generated_id_cards` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `next_of_kin` varchar(50) NOT NULL,
  `next_of_kin_phone` varchar(11) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `card_Approvement` varchar(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generated_id_cards`
--

INSERT INTO `generated_id_cards` (`id`, `fname`, `mname`, `lname`, `reg`, `faculty`, `department`, `phone`, `next_of_kin`, `next_of_kin_phone`, `blood_group`, `card_Approvement`, `image`) VALUES
(1, 'Usman', 'Y', 'Agent', 'FCP/CSC/17/1048', 'Computing', 'computer science', '09012345678', 'HOD', '233457687', 'A+', 'Ready', 'Sci1212.png'),
(2, 'Ishaq', 'salisu', 'Metumbi', 'ug20/com/2022', 'Computing', 'computer science', '09012345', 'Dean', '9087654543', 'B+', 'Ready', 'xaitory2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `fname`, `surname`, `email`, `password`) VALUES
(1, 'Usman', 'Yahaya', 'usman@fud.final', '123'),
(2, 'Ishaq', 'Metumbi', 'metumbi@sci.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `generated_id_cards`
--
ALTER TABLE `generated_id_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `generated_id_cards`
--
ALTER TABLE `generated_id_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
