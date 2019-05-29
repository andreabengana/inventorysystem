-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 09:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldispatch`
--

CREATE TABLE `tbldispatch` (
  `transactionNumber` int(11) NOT NULL,
  `dispatchID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `dispatchToDepartment` varchar(800) NOT NULL,
  `dispatchDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldispatch`
--

INSERT INTO `tbldispatch` (`transactionNumber`, `dispatchID`, `userID`, `productID`, `dispatchToDepartment`, `dispatchDate`) VALUES
(1, 1, 1, 13, 'Operations', '2019-05-20 06:10:41'),
(2, 1, 1, 11, 'Operations', '2019-05-20 06:08:53'),
(3, 1, 1, 12, 'Operations', '2019-05-20 06:10:41'),
(4, 1, 1, 14, 'Operations', '2019-05-20 06:10:41'),
(11, 2, 1, 15, 'Operations', '2019-05-20 08:17:19'),
(12, 2, 1, 16, 'Operations', '2019-05-20 08:17:19'),
(13, 2, 1, 17, 'Operations', '2019-05-20 08:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `productID` int(11) NOT NULL,
  `productCompanyCode` varchar(800) NOT NULL,
  `productBrand` varchar(800) NOT NULL,
  `productModel` varchar(800) NOT NULL,
  `productDesc` varchar(800) NOT NULL,
  `dateAccepted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productBranch` longtext,
  `productTag` varchar(800) NOT NULL,
  `productStatus` varchar(800) NOT NULL,
  `employeeAssigned` varchar(800) DEFAULT NULL,
  `workstationAssigned` varchar(800) DEFAULT NULL,
  `datePurchased` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`productID`, `productCompanyCode`, `productBrand`, `productModel`, `productDesc`, `dateAccepted`, `productBranch`, `productTag`, `productStatus`, `employeeAssigned`, `workstationAssigned`, `datePurchased`) VALUES
(8, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0001-W', 'Returned', NULL, NULL, '0000-00-00'),
(9, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0002-W', 'Dispatched', '', '', '0000-00-00'),
(10, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0003-W', 'Dispatched', '', '', '0000-00-00'),
(11, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0004-W', 'Dispatched', '', '', '0000-00-00'),
(12, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0005-W', 'Dispatched', '', '', '0000-00-00'),
(13, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0006-W', 'Dispatched', '', '', '0000-00-00'),
(14, 'SM Holdings', 'Logitech', 'G450', 'Mouse', '2019-05-17 05:25:51', 'Wynsum', 'AGBI-FF-01-0007-W', 'Dispatched', '', '', '0000-00-00'),
(15, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0008-W', 'Dispatched', '', '', '0000-00-00'),
(16, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0009-W', 'Dispatched', '', '', '0000-00-00'),
(17, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0010-W', 'Dispatched', '', '', '0000-00-00'),
(18, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0011-W', 'Available', '', '', '2019-05-13'),
(19, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0012-W', 'Available', '', '', '0000-00-00'),
(20, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0013-W', 'Available', '', '', '0000-00-00'),
(21, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0014-W', 'Available', '', '', '0000-00-00'),
(22, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0015-W', 'Available', '', '', '0000-00-00'),
(23, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0016-W', 'Available', '', '', '0000-00-00'),
(24, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 05:49:16', 'Wynsum', 'AGBI-FF-01-0017-W', 'Available', '', '', '0000-00-00'),
(25, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0018-W', 'Available', NULL, NULL, '0000-00-00'),
(26, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0019-W', 'Available', NULL, NULL, '0000-00-00'),
(27, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0020-W', 'Available', NULL, NULL, '0000-00-00'),
(28, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0021-W', 'Available', NULL, NULL, '0000-00-00'),
(29, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0022-W', 'Available', NULL, NULL, '0000-00-00'),
(30, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0023-W', 'Available', NULL, NULL, '0000-00-00'),
(31, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0024-W', 'Available', NULL, NULL, '0000-00-00'),
(32, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0025-W', 'Available', NULL, NULL, '0000-00-00'),
(33, 'SM Holdings', 'A4Tech', '6789', 'Keyboard', '2019-05-17 05:55:50', 'Wynsum', 'AGBI-FF-01-0026-W', 'Available', NULL, NULL, '0000-00-00'),
(113, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0001-R', 'Available', NULL, NULL, '0000-00-00'),
(114, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0002-R', 'Available', NULL, NULL, '0000-00-00'),
(115, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0003-R', 'Available', NULL, NULL, '0000-00-00'),
(116, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0004-R', 'Available', NULL, NULL, '0000-00-00'),
(117, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0005-R', 'Available', NULL, NULL, '0000-00-00'),
(118, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0006-R', 'Available', NULL, NULL, '0000-00-00'),
(119, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0007-R', 'Available', NULL, NULL, '0000-00-00'),
(120, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0008-R', 'Available', NULL, NULL, '0000-00-00'),
(121, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0009-R', 'Available', NULL, NULL, '0000-00-00'),
(122, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:30:58', 'Cybergate', 'AGBI-FF-01-0010-R', 'Available', NULL, NULL, '0000-00-00'),
(124, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:33:53', 'Cybergate', 'AGBI-FF-01-0011-R', 'Available', NULL, NULL, '0000-00-00'),
(126, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:37:22', 'Cybergate', 'AGBI-FF-01-0012-R', 'Available', NULL, NULL, '0000-00-00'),
(127, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:38:20', 'Cybergate', 'AGBI-FF-01-0013-R', 'Available', NULL, NULL, '0000-00-00'),
(128, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0001-E', 'Available', NULL, NULL, '0000-00-00'),
(129, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0002-E', 'Available', NULL, NULL, '0000-00-00'),
(130, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0003-E', 'Available', NULL, NULL, '0000-00-00'),
(131, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0004-E', 'Available', NULL, NULL, '0000-00-00'),
(132, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0005-E', 'Available', NULL, NULL, '0000-00-00'),
(133, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0006-E', 'Available', NULL, NULL, '0000-00-00'),
(134, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0007-E', 'Available', NULL, NULL, '0000-00-00'),
(135, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0008-E', 'Available', NULL, NULL, '0000-00-00'),
(136, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0009-E', 'Available', NULL, NULL, '0000-00-00'),
(137, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:05', 'EcoTower', 'AGBI-FF-01-0010-E', 'Available', NULL, NULL, '0000-00-00'),
(138, 'SM Holdings', 'A4Tech', '12345', 'Mouse', '2019-05-17 06:41:58', 'EcoTower', 'AGBI-FF-01-0011-E', 'Available', NULL, NULL, '0000-00-00'),
(139, 'SM Holdings', 'NEC', '6789', 'AVR', '2019-05-24 05:36:43', 'EcoTower', 'AGBI-FF-01-0012-E', 'Available', NULL, NULL, '2019-05-24'),
(140, 'SM Holdings', 'NEC', '6789', 'AVR', '2019-05-24 05:36:43', 'EcoTower', 'AGBI-FF-01-0013-E', 'Available', NULL, NULL, '2019-05-24'),
(141, 'SM Holdings', 'NEC', '6789', 'AVR', '2019-05-24 05:36:43', 'EcoTower', 'AGBI-FF-01-0014-E', 'Available', NULL, NULL, '2019-05-24'),
(142, 'SM Holdings', 'NEC', '6789', 'AVR', '2019-05-24 05:36:43', 'EcoTower', 'AGBI-FF-01-0015-E', 'Available', NULL, NULL, '2019-05-24'),
(143, 'SM Holdings', 'NEC', '6789', 'AVR', '2019-05-24 05:36:43', 'EcoTower', 'AGBI-FF-01-0016-E', 'Available', NULL, NULL, '2019-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `tblreturn`
--

CREATE TABLE `tblreturn` (
  `returnID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `reasonForReturn` varchar(800) NOT NULL,
  `returnDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsuppliers`
--

CREATE TABLE `tblsuppliers` (
  `supplierID` int(11) NOT NULL,
  `supplierDesc` text NOT NULL,
  `supplierPersonnelFirstName` varchar(800) NOT NULL,
  `supplierPersonnelLastName` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransfer`
--

CREATE TABLE `tbltransfer` (
  `transferID` int(11) NOT NULL,
  `dispatchID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `transferToDepartment` varchar(800) NOT NULL,
  `transferDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userID` int(11) NOT NULL,
  `userName` varchar(800) NOT NULL,
  `userEmail` varchar(800) NOT NULL,
  `userPassword` varchar(800) NOT NULL,
  `userType` varchar(800) NOT NULL,
  `personnelFirstName` varchar(800) NOT NULL,
  `personnelLastName` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userID`, `userName`, `userEmail`, `userPassword`, `userType`, `personnelFirstName`, `personnelLastName`) VALUES
(1, 'ricopogi', 'garciaricopaulo30@gmail.com', '12345', 'superadmin', 'Rico Paulo', 'Garcia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldispatch`
--
ALTER TABLE `tbldispatch`
  ADD PRIMARY KEY (`transactionNumber`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `tblreturn`
--
ALTER TABLE `tblreturn`
  ADD PRIMARY KEY (`returnID`);

--
-- Indexes for table `tblsuppliers`
--
ALTER TABLE `tblsuppliers`
  ADD PRIMARY KEY (`supplierID`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Indexes for table `tbltransfer`
--
ALTER TABLE `tbltransfer`
  ADD PRIMARY KEY (`transferID`),
  ADD KEY `dispatchID` (`dispatchID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `transferID` (`transferID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldispatch`
--
ALTER TABLE `tbldispatch`
  MODIFY `transactionNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `tblreturn`
--
ALTER TABLE `tblreturn`
  MODIFY `returnID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsuppliers`
--
ALTER TABLE `tblsuppliers`
  MODIFY `supplierID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransfer`
--
ALTER TABLE `tbltransfer`
  MODIFY `transferID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldispatch`
--
ALTER TABLE `tbldispatch`
  ADD CONSTRAINT `tblDispatch_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tblusers` (`userID`),
  ADD CONSTRAINT `tblDispatch_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `tblproducts` (`productID`);

--
-- Constraints for table `tbltransfer`
--
ALTER TABLE `tbltransfer`
  ADD CONSTRAINT `tblTransfer_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `tblproducts` (`productID`),
  ADD CONSTRAINT `tblTransfer_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `tblusers` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
