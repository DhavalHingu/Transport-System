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
(1, 1, 20, 20, 20, 20, 20, 0, 20, 20, '20', 20, 20, 20, 220),
(3, 2, 57, 58, 65, 45, 26, 0, 26, 24, '99', 24, 24, 22, 419),
(4, 15, 100, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 100);

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
  `contact` int(12) NOT NULL,
  `weight` varchar(30) DEFAULT NULL,
  `rate_permit` varchar(30) DEFAULT NULL,
  `total_fraight` double DEFAULT NULL,
  `advance` double DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `w_charge` int(30) DEFAULT NULL,
  `claim` varchar(30) DEFAULT NULL,
  `truck_owner` varchar(30) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `receive1` int(30) NOT NULL,
  `receive2` int(30) NOT NULL,
  `receive3` int(30) NOT NULL,
  `receive4` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripdetails`
--

INSERT INTO `tripdetails` (`trip_no`, `invoice_no`, `truck_no`, `date`, `from`, `to`, `address`, `name`, `contact`, `weight`, `rate_permit`, `total_fraight`, `advance`, `balance`, `w_charge`, `claim`, `truck_owner`, `driver_name`, `receive1`, `receive2`, `receive3`, `receive4`) VALUES
(1, 1, 'DD 02 - 9220', '2017-03-28', 'diu', 'ahmedabad', 'ghatlodiya', 'Dhaval Hingu', 0, '52', '65', 500, -300, 300, 82, '36', 'aakash', 'montu', 500, 0, 0, 0),
(1, 2, 'DD 02 - 9220', '2017-03-28', 'diu', 'ahmedabad', 'ghatlodiya', 'abc', 0, '65', '55', 1000, -1750, -500, 58, '45', 'xyz', 'montu', 0, 0, 0, 0),
(2, 3, 'gj-01-0650', '2017-04-02', 'ahmedabad', 'diu', 'satadhar', 'niraj ', 0, '58', '55', 1024, 45, 979, 54, '75', 'jinish', 'montu', 0, 0, 0, 0),
(0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 30, 40, 50),
(4, 5, '', '0000-00-00', '', '', '', '', 0, '', '', 5000, 1000, 4000, 0, '', '', 'montu', 0, 0, 0, 0),
(5, 6, '', '0000-00-00', '', '', '', 'cool', 0, '', '', 5000, 8000, -3000, 0, '', '', 'montu', 0, 3000, 0, 0),
(6, 7, '', '0000-00-00', '', '', '', 'dd', 0, '', '', 5000, 5000, 0, 0, '', '', 'montu', 0, 0, 2000, 0),
(15, 8, 'gj-1-aa-2565', '2017-04-06', 'ahmedabad', 'Ghandhinagar', '', 'Dhaivat', 2147483647, '500', '55', 27500, 25000, 2500, 0, '', 'JHGF', 'abc', 10000, 0, 0, 0),
(15, 9, 'gj-1-aa-2565', '2017-04-06', 'ahmedabad', 'Ghandhinagar', '', 'Mishel', 2147483647, '200', '50', 10000, 8500, 1500, 0, '', 'JHGF', 'montu', 0, 0, 0, 0);

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
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tripdetails`
--
ALTER TABLE `tripdetails`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
