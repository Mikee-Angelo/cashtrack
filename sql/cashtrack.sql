-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 12:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans_income`
--

CREATE TABLE `trans_income` (
  `ti_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `income_date` date NOT NULL,
  `income_time` time NOT NULL,
  `income_amount` text NOT NULL,
  `income_note` text NOT NULL,
  `income_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `date_created`) VALUES
(1, 'spidercorp', '12347890', 'Michael Angelo De Leon', '2019-01-11 14:04:19'),
(2, 'adobe', '12347890', 'Ladykazan Ramirez', '2019-01-11 14:12:11'),
(3, 'chillin', '12347890', 'Karl Adarbe', '2019-01-11 14:13:08'),
(4, 'jabimix', '12347890', 'Angelo Zapanta', '2019-01-11 14:13:54'),
(5, '500man', '12347890', 'Rommel Jumaoas', '2019-01-11 14:14:27'),
(6, 'gagambinoy', '12347890', 'Emman Bertes', '2019-01-11 14:31:58'),
(7, 'papavi', '12347890', 'jeremy varona', '2019-01-11 14:41:08'),
(8, 'vivivi', '12347890', 'Michael Angelo De Leon', '2019-01-11 14:42:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans_income`
--
ALTER TABLE `trans_income`
  ADD PRIMARY KEY (`ti_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trans_income`
--
ALTER TABLE `trans_income`
  MODIFY `ti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
