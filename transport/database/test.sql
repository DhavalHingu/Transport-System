-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 07:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `trip_no` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `licence_no` varchar(10) NOT NULL,
  `licence_expiry` date NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sr_no`, `name`, `age`, `licence_no`, `licence_expiry`, `address`) VALUES
(7, 'montu', 21, '332496', '2017-03-19', 'diu'),
(8, 'abc', 0, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `sr_no` int(11) NOT NULL,
  `trip_no` int(11) NOT NULL,
  `diesel` double NOT NULL,
  `way` double NOT NULL,
  `toll_tax` double NOT NULL,
  `road_repairs` double NOT NULL,
  `foods` double NOT NULL,
  `general` double NOT NULL,
  `driver` double NOT NULL,
  `cleaner` double NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `loading` double NOT NULL,
  `unloading` double NOT NULL,
  `others` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`sr_no`, `trip_no`, `diesel`, `way`, `toll_tax`, `road_repairs`, `foods`, `general`, `driver`, `cleaner`, `telephone`, `loading`, `unloading`, `others`, `total`) VALUES
(1, 1, 20, 20, 20, 20, 20, 0, 20, 20, '20', 20, 20, 20, 220);

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `trip_no` int(20) NOT NULL,
  `total` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tripdetails`
--

CREATE TABLE `tripdetails` (
  `trip_no` int(10) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `truck_no` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `from` varchar(30) DEFAULT NULL,
  `to` varchar(30) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL,
  `rate_permit` varchar(30) DEFAULT NULL,
  `total_fraight` double DEFAULT NULL,
  `advance` double DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `w_charge` int(30) DEFAULT NULL,
  `claim` varchar(30) DEFAULT NULL,
  `truck_owner` varchar(30) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripdetails`
--

INSERT INTO `tripdetails` (`trip_no`, `invoice_no`, `truck_no`, `date`, `from`, `to`, `address`, `name`, `weight`, `rate_permit`, `total_fraight`, `advance`, `balance`, `w_charge`, `claim`, `truck_owner`, `driver_name`) VALUES
(1, 1, 'DD 02 - 9220', '2017-03-28', 'diu', 'ahmedabad', 'ghatlodiya', 'Dhaval Hingu', '52', '65', 500, 200, 300, 82, '36', 'aakash', 'montu'),
(1, 2, 'DD 02 - 9220', '2017-03-28', 'diu', 'ahmedabad', 'ghatlodiya', 'abc', '65', '55', 1000, 500, 500, 58, '45', 'xyz', 'montu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'dhaval hingu', 'dhaval7030@gmail.com', 'a74b9c9d912771e17e69b5096e5ae962a960fe1ab3e9b279701f25bf85b121e8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `trip_no` (`trip_no`);

--
-- Indexes for table `tripdetails`
--
ALTER TABLE `tripdetails`
  ADD UNIQUE KEY `invoice no` (`invoice_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tripdetails`
--
ALTER TABLE `tripdetails`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
