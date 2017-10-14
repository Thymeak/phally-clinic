-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2017 at 10:01 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phally_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `khmername` varchar(150) DEFAULT NULL,
  `husbandName` varchar(150) DEFAULT NULL,
  `husbandAge` int(11) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `age` int(11) NOT NULL,
  `ageType` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `homePhone` varchar(50) DEFAULT NULL,
  `homeNo` varchar(50) DEFAULT NULL,
  `streetNo` varchar(50) DEFAULT NULL,
  `groupNo` varchar(50) DEFAULT NULL,
  `provinceNo` varchar(50) DEFAULT NULL,
  `distinctNo` varchar(50) DEFAULT NULL,
  `communNo` varchar(50) DEFAULT NULL,
  `villageNo` varchar(50) DEFAULT NULL,
  `createDate` date NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custID`, `firstname`, `lastname`, `fullname`, `khmername`, `husbandName`, `husbandAge`, `nationality`, `department`, `gender`, `age`, `ageType`, `occupation`, `phone`, `homePhone`, `homeNo`, `streetNo`, `groupNo`, `provinceNo`, `distinctNo`, `communNo`, `villageNo`, `createDate`, `isActive`) VALUES
(1, 'Boy', 'Sothymeak', 'Boy Sothymeak', 'បោយ⁣ សុទ្ធិមគ្គ', '', 0, 'Khmer', 'General', 'M', 23, 'ឆ្នាំ', 'Worker', '085 765 062', '010 59 02 13', '14Eo', '299', '62', 'ភ្នំពេញ', 'បឹងកក់២', 'ទួលគោគ', 'ទួលគោគ', '2017-10-02', 'Y'),
(2, 'asdf', 'asdf', 'asdf asdf', '', '', 0, NULL, 'General', 'M', 12, 'ឆ្នាំ', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `department` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empID`, `firstname`, `lastname`, `gender`, `department`, `username`, `password`, `phone`, `isActive`) VALUES
(1, 'Boy', 'Sothymeak', 'M', 'All', 'Thymeak', '202cb962ac59075b964b07152d234b70', NULL, 'Y'),
(7, 'sdfasdf', 'asdfasdf', 'M', 'All', 'asdfasdf', '4a4d993ed7bd7d467b27af52d2aaa800', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `maternity_letterin`
--

CREATE TABLE `maternity_letterin` (
  `id` int(11) NOT NULL,
  `doctor` varchar(150) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(100) NOT NULL,
  `custGender` char(1) NOT NULL,
  `custNationality` varchar(150) NOT NULL,
  `custFather` varchar(150) NOT NULL,
  `custMother` varchar(150) NOT NULL,
  `custProvince` varchar(150) NOT NULL,
  `custDistinct` varchar(150) NOT NULL,
  `custCommune` varchar(150) NOT NULL,
  `custVillage` varchar(150) NOT NULL,
  `custOccupation` varchar(150) NOT NULL,
  `custUnit` varchar(150) NOT NULL,
  `custCondition` varchar(500) NOT NULL,
  `department` varchar(150) NOT NULL,
  `date_in` varchar(150) NOT NULL,
  `custPhone` varchar(150) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `modify_by` int(11) DEFAULT NULL,
  `modify_date` date DEFAULT NULL,
  `tran_type` varchar(150) NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maternity_letterin`
--

INSERT INTO `maternity_letterin` (`id`, `doctor`, `custID`, `custName`, `custGender`, `custNationality`, `custFather`, `custMother`, `custProvince`, `custDistinct`, `custCommune`, `custVillage`, `custOccupation`, `custUnit`, `custCondition`, `department`, `date_in`, `custPhone`, `create_by`, `create_date`, `modify_by`, `modify_date`, `tran_type`, `isActive`) VALUES
(1, 'សុខ', 1, 'Boy Sothymeak', 'M', 'Khmer', 'សោ', 'សា', 'ភ្នំពេញ', 'បឹងកក់២', 'ទួលគោគ', 'ទួលគោគ', 'Worker', 'Amret MFI', 'ABC', 'General', '07-10-2017 10:14PM', '085 765 062', 1, '2017-10-07', NULL, NULL, 'LetterIn', 'Y'),
(2, 'Doctor', 1, 'Boy Sothymeak', 'M', 'Khmer', 'ABC', 'ABC', 'ភ្នំពេញ', 'បឹងកក់២', 'ទួលគោគ', 'ទួលគោគ', 'Worker', 'Amret MFI', 'Sick', 'General', '07-10-2017 10:14PM', '085 765 062', 1, '2017-10-09', NULL, NULL, 'LetterIn', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `maternity_letterout`
--

CREATE TABLE `maternity_letterout` (
  `id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(150) DEFAULT NULL,
  `custAge` int(11) DEFAULT NULL,
  `custNationality` varchar(100) DEFAULT NULL,
  `custOccupation` varchar(150) DEFAULT NULL,
  `custUnit` varchar(150) DEFAULT NULL,
  `custHusband` varchar(150) DEFAULT NULL,
  `husAge` int(11) DEFAULT NULL,
  `husNationality` varchar(150) DEFAULT NULL,
  `husOccupation` varchar(150) DEFAULT NULL,
  `husUnit` varchar(150) DEFAULT NULL,
  `villageNo` varchar(150) DEFAULT NULL,
  `communeNo` varchar(150) DEFAULT NULL,
  `distinctNo` varchar(150) DEFAULT NULL,
  `provinceNo` varchar(150) DEFAULT NULL,
  `phoneNo` varchar(150) DEFAULT NULL,
  `dayIn` varchar(10) DEFAULT NULL,
  `monthIn` varchar(10) DEFAULT NULL,
  `yearIn` varchar(10) DEFAULT NULL,
  `dayOut` varchar(10) DEFAULT NULL,
  `monthOut` varchar(10) DEFAULT NULL,
  `yearOut` varchar(10) DEFAULT NULL,
  `condition_in` varchar(250) DEFAULT NULL,
  `condition_out` varchar(250) DEFAULT NULL,
  `dayout_1` varchar(10) DEFAULT NULL,
  `monthout_1` varchar(10) DEFAULT NULL,
  `yearout_1` varchar(10) DEFAULT NULL,
  `timeout_1` varchar(50) DEFAULT NULL,
  `condition_1` varchar(250) DEFAULT NULL,
  `isSugery` char(1) DEFAULT NULL,
  `cust_condition_out` varchar(250) DEFAULT NULL,
  `type_1` varchar(20) DEFAULT NULL,
  `type_1_1` varchar(20) DEFAULT NULL,
  `type_2` varchar(20) DEFAULT NULL,
  `type_2_2` varchar(20) DEFAULT NULL,
  `type_3` varchar(20) DEFAULT NULL,
  `type_3_3` varchar(20) DEFAULT NULL,
  `create_date` date NOT NULL,
  `create_by` int(11) NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fullname` varchar(150) NOT NULL COMMENT 'this field is not input. firstname + lastname'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `firstname`, `lastname`, `fullname`) VALUES
(1, 'Boy', 'Sothymeak', '0'),
(2, 'asdfa', 'asdfasdfasdfas', 'asdfa asdfasdfasdfas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `maternity_letterin`
--
ALTER TABLE `maternity_letterin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maternity_letterout`
--
ALTER TABLE `maternity_letterout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `maternity_letterin`
--
ALTER TABLE `maternity_letterin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `maternity_letterout`
--
ALTER TABLE `maternity_letterout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
