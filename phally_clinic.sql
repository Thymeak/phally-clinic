-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 05:51 PM
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
(3, 'Sok', 'San', 'Sok San', 'សុខ⁣ សាន', 'សាន សុខ', 28, 'Cambodia', 'General', 'M', 23, 'ឆ្នាំ', 'កសិករ', '10590213', '10590213', '12', '14Eo,Str299', '62', 'Phonm Penh', 'ទួលគោគ', 'Phonm Penh', 'ទួលគោគ', '2017-10-15', 'Y');

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

--
-- Dumping data for table `maternity_letterout`
--

INSERT INTO `maternity_letterout` (`id`, `custID`, `custName`, `custAge`, `custNationality`, `custOccupation`, `custUnit`, `custHusband`, `husAge`, `husNationality`, `husOccupation`, `husUnit`, `villageNo`, `communeNo`, `distinctNo`, `provinceNo`, `phoneNo`, `dayIn`, `monthIn`, `yearIn`, `dayOut`, `monthOut`, `yearOut`, `condition_in`, `condition_out`, `dayout_1`, `monthout_1`, `yearout_1`, `timeout_1`, `condition_1`, `isSugery`, `cust_condition_out`, `type_1`, `type_1_1`, `type_2`, `type_2_2`, `type_3`, `type_3_3`, `create_date`, `create_by`, `isActive`) VALUES
(1, 3, 'Sok San', 23, 'Cambodia', 'កសិករ', '', 'សាន សុខ', 28, 'ខ្មែរ', 'កសិករ', '', 'ទួលគោគ', 'Phonm Penh', 'ទួលគោគ', 'Phonm Penh', '10590213', '11', '09', '2017', '11', '10', '2017', 'sick', 'healthy', '11', '10', '2017', '9:10 AM', 'sick', NULL, 'healthy', '2', 'ខែ', '5', 'ខែ', '2', 'ឆ្នាំ', '2017-10-15', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `maternity_letter_accept`
--

CREATE TABLE `maternity_letter_accept` (
  `id` int(11) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `guardian_nationality` varchar(100) NOT NULL,
  `guardian_gender` varchar(20) NOT NULL,
  `guardian_age` int(11) NOT NULL,
  `villageNo` varchar(150) NOT NULL,
  `communeNo` varchar(150) NOT NULL,
  `distinctNo` varchar(150) NOT NULL,
  `provinceNo` varchar(150) NOT NULL,
  `guardian_type` varchar(150) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(200) NOT NULL,
  `cust_gender` varchar(20) NOT NULL,
  `cust_age` int(11) NOT NULL,
  `accept_reason` varchar(500) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `isActive` char(1) NOT NULL COMMENT 'store value ''Y'' mean create and ''N'' mean delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maternity_letter_birth`
--

CREATE TABLE `maternity_letter_birth` (
  `id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(200) NOT NULL,
  `custAge` int(11) NOT NULL,
  `cust_nationality` varchar(150) NOT NULL,
  `homeNo` varchar(20) NOT NULL,
  `villageNo` varchar(100) NOT NULL,
  `communeNo` varchar(100) NOT NULL,
  `distinctNo` varchar(100) NOT NULL,
  `provinceNo` varchar(100) NOT NULL,
  `cust_occupation` varchar(200) NOT NULL,
  `husband_name` varchar(200) NOT NULL,
  `husband_age` int(11) NOT NULL,
  `husband_nationality` varchar(100) NOT NULL,
  `husband_occupation` varchar(100) NOT NULL,
  `child_gender` varchar(20) NOT NULL,
  `child_weight` varchar(20) NOT NULL,
  `birth_time` varchar(100) NOT NULL,
  `birth_day` varchar(10) NOT NULL,
  `birth_month` varchar(10) NOT NULL,
  `birth_year` varchar(10) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `isActive` char(1) NOT NULL COMMENT '''Y'' is create , ''N'' is delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medical_letterin`
--

CREATE TABLE `medical_letterin` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(200) NOT NULL,
  `custGender` varchar(20) NOT NULL,
  `custNationality` varchar(150) NOT NULL,
  `fatherName` varchar(200) NOT NULL,
  `motherName` varchar(200) NOT NULL,
  `villageNo` varchar(150) NOT NULL,
  `communeNo` varchar(150) NOT NULL,
  `distinctNo` varchar(150) NOT NULL,
  `provinceNo` varchar(150) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `unit` varchar(200) DEFAULT NULL,
  `condition_in` varchar(500) NOT NULL,
  `department` varchar(200) NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_letterin`
--

INSERT INTO `medical_letterin` (`id`, `doctor_name`, `custID`, `custName`, `custGender`, `custNationality`, `fatherName`, `motherName`, `villageNo`, `communeNo`, `distinctNo`, `provinceNo`, `occupation`, `unit`, `condition_in`, `department`, `time_in`, `phone_number`, `create_by`, `create_date`, `isActive`) VALUES
(1, 'banana', 3, 'Sok San', 'M', 'Cambodia', 'ABC', 'ABC', 'ទួលគោគ', 'Phonm Penh', 'ទួលគោគ', 'Phonm Penh', 'កសិករ', '', 'ABC', 'abc', '10:00 PM', '10590213', 1, '2017-10-21', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `medical_letterout`
--

CREATE TABLE `medical_letterout` (
  `id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(200) NOT NULL,
  `custGender` varchar(10) NOT NULL,
  `custAge` int(11) NOT NULL,
  `custNationality` varchar(100) NOT NULL,
  `custOccupation` varchar(200) NOT NULL,
  `villageNo` varchar(100) NOT NULL,
  `communeNo` varchar(100) NOT NULL,
  `distinctNo` varchar(100) NOT NULL,
  `provinceNo` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `department` varchar(200) NOT NULL,
  `date_out` date NOT NULL,
  `total_day_in` int(11) NOT NULL,
  `condition` varchar(500) NOT NULL,
  `doctor_consultant` varchar(500) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_letterout`
--

INSERT INTO `medical_letterout` (`id`, `custID`, `custName`, `custGender`, `custAge`, `custNationality`, `custOccupation`, `villageNo`, `communeNo`, `distinctNo`, `provinceNo`, `date_in`, `department`, `date_out`, `total_day_in`, `condition`, `doctor_consultant`, `create_by`, `create_date`, `isActive`) VALUES
(1, 1, '', 'M', 23, 'Khmer', 'Worker', 'ទួលគោគ', 'ទួលគោគ', 'បឹងកក់២', 'ភ្នំពេញ', '2017-09-23', 'General', '2017-10-21', 20, 'ABC', 'ABC', 1, '2017-10-21', 'Y');

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
-- Indexes for table `maternity_letter_accept`
--
ALTER TABLE `maternity_letter_accept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maternity_letter_birth`
--
ALTER TABLE `maternity_letter_birth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_letterin`
--
ALTER TABLE `medical_letterin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_letterout`
--
ALTER TABLE `medical_letterout`
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
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `maternity_letter_accept`
--
ALTER TABLE `maternity_letter_accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maternity_letter_birth`
--
ALTER TABLE `maternity_letter_birth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_letterin`
--
ALTER TABLE `medical_letterin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_letterout`
--
ALTER TABLE `medical_letterout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
