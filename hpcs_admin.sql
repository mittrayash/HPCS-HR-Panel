-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 02:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpcs_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `EmpId` varchar(200) NOT NULL,
  `AttendanceDate` date NOT NULL,
  `AttendanceDay` varchar(20) NOT NULL,
  `EntryTime` varchar(50) NOT NULL,
  `ExitTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`EmpId`, `AttendanceDate`, `AttendanceDay`, `EntryTime`, `ExitTime`) VALUES
('HPCS16005', '2017-04-19', 'Wednesday', '09:03', '18:41'),
('HPCS16005', '2017-04-20', 'Thursday', '09:07', '18:35'),
('HPCS16005', '2017-04-21', 'Friday', '08:59', '19:11'),
('HPCS16005', '2017-04-24', 'Monday', '09:02', '18:54'),
('HPCS16005', '2017-04-25', 'Tuesday', '09:04', '18:44'),
('HPCS16005', '2017-04-26', 'Wednesday', '09:12', '18:40'),
('HPCS16005', '2017-04-27', 'Thursday', '09:26', '19:30'),
('HPCS16005', '2017-04-28', 'Friday', '09:10', '18:43'),
('HPCS16005', '2017-05-01', 'Monday', '09:10', '18:40'),
('HPCS16005', '2017-05-02', 'Tuesday', '09:13', '18:35'),
('HPCS16005', '2017-05-03', 'Wednesday', '09:11', '18:45'),
('HPCS16005', '2017-05-04', 'Thursday', '09:01', '18:37'),
('HPCS16005', '2017-05-05', 'Friday', '09:07', '18:30'),
('HPCS16005', '2017-05-08', 'Monday', '09:08', '18:53'),
('HPCS16005', '2017-05-09', 'Tuesday', '09:05', '18:43'),
('HPCS16005', '2017-05-10', 'Wednesday', '09:05', '18:44'),
('HPCS16005', '2017-05-11', 'Thursday', '08:48', '18:35'),
('HPCS16005', '2017-05-12', 'Friday', '09:02', '18:41'),
('HPCS16005', '2017-05-15', 'Monday', '09:06', '18:37'),
('HPCS16005', '2017-05-16', 'Tuesday', '10:25', '18:40'),
('HPCS16005', '2017-05-17', 'Wednesday', '09:28', '19:05'),
('HPCS16005', '2017-05-18', 'Thursday', '08:48', '18:33'),
('HPCS16005', '2017-05-22', 'Monday', '09:04', '19:11'),
('HPCS16005', '2017-05-23', 'Tuesday', '09:03', '18:36'),
('HPCS16005', '2017-05-24', 'Wednesday', '09:14', '18:35'),
('HPCS16005', '2017-05-25', 'Thursday', '09:00', '18:36'),
('HPCS16005', '2017-05-26', 'Friday', '08:56', '19:47'),
('HPCS16005', '2017-05-29', 'Monday', '09:08', '18:37'),
('HPCS16005', '2017-05-30', 'Tuesday', '09:07', '18:39'),
('HPCS16005', '2017-05-31', 'Wednesday', '09:14', '18:40'),
('HPCS16005', '2017-06-01', 'Thursday', '12:55', '19:00'),
('HPCS16005', '2017-06-02', 'Friday', '09:17', '18:54'),
('HPCS16005', '2017-06-05', 'Monday', '09:03', '18:45'),
('HPCS16005', '2017-06-12', 'Monday', '09:10', '18:43'),
('HPCS16005', '2017-06-13', 'Tuesday', '09:05', '19:08'),
('HPCS16005', '2017-06-14', 'Wednesday', '09:05', '18:34'),
('HPCS16005', '2017-06-15', 'Thursday', '09:18', '18:38'),
('HPCS16005', '2017-06-16', 'Friday', '09:15', '19:14'),
('HPCS16005', '2017-06-19', 'Monday', '09:20', '19:18'),
('HPCS16005', '2017-06-20', 'Tuesday', '09:20', '18:34'),
('HPCS16005', '2017-06-21', 'Wednesday', '09:10', '18:42'),
('HPCS16005', '2017-06-22', 'Thursday', '08:38', '18:34'),
('HPCS16005', '2017-06-23', 'Friday', '09:20', '18:45'),
('HPCS16005', '2017-06-26', 'Monday', '08:28', '18:38'),
('HPCS16005', '2017-06-27', 'Tuesday', '09:20', '18:38'),
('HPCS16005', '2017-06-28', 'Wednesday', '09:14', '18:36'),
('HPCS17012', '2017-04-19', 'Wednesday', '09:03', '18:41'),
('HPCS17012', '2017-04-20', 'Thursday', '09:07', '18:35'),
('HPCS17012', '2017-04-21', 'Friday', '08:59', '19:11'),
('HPCS17012', '2017-04-24', 'Monday', '09:02', '18:54'),
('HPCS17012', '2017-04-25', 'Tuesday', '09:04', '18:44'),
('HPCS17012', '2017-04-26', 'Wednesday', '09:12', '18:40'),
('HPCS17012', '2017-04-27', 'Thursday', '09:26', '19:30'),
('HPCS17012', '2017-04-28', 'Friday', '09:10', '18:43'),
('HPCS17012', '2017-05-01', 'Monday', '09:10', '18:40'),
('HPCS17012', '2017-05-02', 'Tuesday', '09:13', '18:35'),
('HPCS17012', '2017-05-03', 'Wednesday', '09:11', '18:45'),
('HPCS17012', '2017-05-04', 'Thursday', '09:01', '18:37'),
('HPCS17012', '2017-05-05', 'Friday', '09:07', '18:30'),
('HPCS17012', '2017-05-08', 'Monday', '09:08', '18:53'),
('HPCS17012', '2017-05-09', 'Tuesday', '09:05', '18:43'),
('HPCS17012', '2017-05-10', 'Wednesday', '09:05', '18:44'),
('HPCS17012', '2017-05-11', 'Thursday', '08:48', '18:35'),
('HPCS17012', '2017-05-12', 'Friday', '09:02', '18:41'),
('HPCS17012', '2017-05-15', 'Monday', '09:06', '18:37'),
('HPCS17012', '2017-05-16', 'Tuesday', '10:25', '18:40'),
('HPCS17012', '2017-05-17', 'Wednesday', '09:28', '19:05'),
('HPCS17012', '2017-05-18', 'Thursday', '08:48', '18:33'),
('HPCS17012', '2017-05-22', 'Monday', '09:04', '19:11'),
('HPCS17012', '2017-05-23', 'Tuesday', '09:03', '18:36'),
('HPCS17012', '2017-05-24', 'Wednesday', '09:14', '18:35'),
('HPCS17012', '2017-05-25', 'Thursday', '09:00', '18:36'),
('HPCS17012', '2017-05-26', 'Friday', '08:56', '19:47'),
('HPCS17012', '2017-05-29', 'Monday', '09:08', '18:37'),
('HPCS17012', '2017-05-30', 'Tuesday', '09:07', '18:39'),
('HPCS17012', '2017-05-31', 'Wednesday', '09:14', '18:40'),
('HPCS17012', '2017-06-01', 'Thursday', '12:55', '19:00'),
('HPCS17012', '2017-06-02', 'Friday', '09:17', '18:54'),
('HPCS17012', '2017-06-05', 'Monday', '09:03', '18:45'),
('HPCS17012', '2017-06-12', 'Monday', '09:10', '18:43'),
('HPCS17012', '2017-06-13', 'Tuesday', '09:05', '19:08'),
('HPCS17012', '2017-06-14', 'Wednesday', '09:05', '18:34'),
('HPCS17012', '2017-06-15', 'Thursday', '09:18', '18:38'),
('HPCS17012', '2017-06-16', 'Friday', '09:15', '19:14'),
('HPCS17012', '2017-06-19', 'Monday', '09:20', '19:18'),
('HPCS17012', '2017-06-20', 'Tuesday', '09:20', '18:34'),
('HPCS17012', '2017-06-21', 'Wednesday', '09:10', '18:42'),
('HPCS17012', '2017-06-22', 'Thursday', '08:38', '18:34'),
('HPCS17012', '2017-06-23', 'Friday', '09:20', '18:45'),
('HPCS17012', '2017-06-26', 'Monday', '08:28', '18:38'),
('HPCS17012', '2017-06-27', 'Tuesday', '09:20', '18:38'),
('HPCS17012', '2017-06-28', 'Wednesday', '09:14', '18:36');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `serialNo` int(100) NOT NULL,
  `EmployeeID` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hpcs_email_ID` varchar(100) NOT NULL DEFAULT '0',
  `prepare_laptop` varchar(100) NOT NULL DEFAULT '0',
  `email_social` varchar(100) NOT NULL DEFAULT '0',
  `email_instructions` varchar(100) NOT NULL DEFAULT '0',
  `email_mlq4` varchar(100) NOT NULL DEFAULT '0',
  `email_teamsID` varchar(100) NOT NULL DEFAULT '0',
  `email_joiningProcess` varchar(100) NOT NULL DEFAULT '0',
  `GoogleDriveAccount` varchar(100) NOT NULL DEFAULT '0',
  `FillDetailsSheet` varchar(100) NOT NULL DEFAULT '0',
  `collectDocs` varchar(100) NOT NULL DEFAULT '0',
  `initialVerification` varchar(100) NOT NULL DEFAULT '0',
  `handOriginals` varchar(100) NOT NULL DEFAULT '0',
  `giveLaptop` varchar(100) NOT NULL DEFAULT '0',
  `giveNotebookPen` varchar(100) NOT NULL DEFAULT '0',
  `greetingCard` varchar(100) NOT NULL DEFAULT '0',
  `trainingSchedule` varchar(100) NOT NULL DEFAULT '0',
  `welcomeMeeting` varchar(100) NOT NULL DEFAULT '0',
  `welcomeEmail` varchar(100) NOT NULL DEFAULT '0',
  `skypeID` varchar(100) NOT NULL DEFAULT '0',
  `pingID` varchar(100) NOT NULL DEFAULT '0',
  `addInSkypeGroup` varchar(100) NOT NULL DEFAULT '0',
  `giveJoiningDocs` varchar(100) NOT NULL DEFAULT '0',
  `signOnDocs` varchar(100) NOT NULL DEFAULT '0',
  `performaSheet` varchar(100) NOT NULL DEFAULT '0',
  `verifyPersonalContact` varchar(100) NOT NULL DEFAULT '0',
  `createEmpFile` varchar(100) NOT NULL DEFAULT '0',
  `placeSignedDocs` varchar(100) NOT NULL DEFAULT '0',
  `addBankKotak` varchar(100) NOT NULL DEFAULT '0',
  `attendanceSheet` varchar(100) NOT NULL DEFAULT '0',
  `fillEmpDetailSheet` varchar(100) NOT NULL DEFAULT '0',
  `fillEmpSalarySheet` varchar(100) NOT NULL DEFAULT '0',
  `addBirthday` varchar(100) NOT NULL DEFAULT '0',
  `addMarriage` varchar(100) NOT NULL DEFAULT '0',
  `addOneYearCompletion` varchar(100) NOT NULL DEFAULT '0',
  `addOnePointFiveYear` varchar(100) NOT NULL DEFAULT '0',
  `probationCompletion` varchar(100) NOT NULL DEFAULT '0',
  `addInWhatsappGroup` varchar(100) NOT NULL DEFAULT '0',
  `verifyOriginals` varchar(100) NOT NULL DEFAULT '0',
  `returnDocsToEmp` varchar(100) NOT NULL DEFAULT '0',
  `EmpAddressInGMap` varchar(100) NOT NULL DEFAULT '0',
  `WordpressAccount` varchar(100) NOT NULL DEFAULT '0',
  `OCLsheet` varchar(100) NOT NULL DEFAULT '0',
  `salaryReview` varchar(100) NOT NULL DEFAULT '0',
  `checklistStatus` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`serialNo`, `EmployeeID`, `name`, `hpcs_email_ID`, `prepare_laptop`, `email_social`, `email_instructions`, `email_mlq4`, `email_teamsID`, `email_joiningProcess`, `GoogleDriveAccount`, `FillDetailsSheet`, `collectDocs`, `initialVerification`, `handOriginals`, `giveLaptop`, `giveNotebookPen`, `greetingCard`, `trainingSchedule`, `welcomeMeeting`, `welcomeEmail`, `skypeID`, `pingID`, `addInSkypeGroup`, `giveJoiningDocs`, `signOnDocs`, `performaSheet`, `verifyPersonalContact`, `createEmpFile`, `placeSignedDocs`, `addBankKotak`, `attendanceSheet`, `fillEmpDetailSheet`, `fillEmpSalarySheet`, `addBirthday`, `addMarriage`, `addOneYearCompletion`, `addOnePointFiveYear`, `probationCompletion`, `addInWhatsappGroup`, `verifyOriginals`, `returnDocsToEmp`, `EmpAddressInGMap`, `WordpressAccount`, `OCLsheet`, `salaryReview`, `checklistStatus`) VALUES
(1, 'abc', 'abcd', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 'emp2', 'newemp', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(21, 'HPCS17000', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'HPCS17003', 'asd', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'HPCS17004', 'abcabcabc', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'HPCS17005', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, 'HPCS17006', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 'HPCS17007', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, 'HPCS17008', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, 'HPCS17009', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, 'HPCS17010', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, 'HPCS17011', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'HPCS17012', 'Yash', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, 'HPCS17013', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'HPCS17016', '', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `serialNo` int(100) NOT NULL,
  `imgPath` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `modeOfEmployment` varchar(500) NOT NULL,
  `Post` varchar(100) NOT NULL,
  `EmployeeID` varchar(500) NOT NULL,
  `DOJ` date NOT NULL,
  `confirmDate` date NOT NULL,
  `DOR` date NOT NULL,
  `trainingStartDate` date NOT NULL,
  `trainingCompletionDate` date NOT NULL,
  `certiDOB` date NOT NULL,
  `actualDOB` date NOT NULL,
  `fatherName` varchar(500) NOT NULL,
  `pContactNo` int(100) NOT NULL,
  `eContactNo` bigint(100) NOT NULL,
  `presentAddr` varchar(500) NOT NULL,
  `presentAddrCity` varchar(100) NOT NULL,
  `presentAddrCountry` varchar(100) NOT NULL,
  `permanentAddr` varchar(500) NOT NULL,
  `permaAddrCity` varchar(100) NOT NULL,
  `permaAddrCountry` varchar(100) NOT NULL,
  `pEmailID` varchar(123) NOT NULL,
  `oEmailID` varchar(100) NOT NULL,
  `skypeID` varchar(500) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `aadhar` int(100) NOT NULL,
  `PAN` varchar(500) NOT NULL,
  `voterID` varchar(500) NOT NULL,
  `passport` varchar(500) NOT NULL,
  `spouseContact` varchar(500) NOT NULL,
  `BankAccountNum` bigint(250) NOT NULL,
  `accountType` varchar(110) NOT NULL,
  `IFSC` varchar(100) NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `bankAddress` varchar(200) NOT NULL,
  `10th` int(11) NOT NULL,
  `12th` int(11) NOT NULL,
  `degName` varchar(110) NOT NULL,
  `degMarks` int(123) NOT NULL,
  `passYear` int(11) NOT NULL,
  `Salary` int(100) NOT NULL,
  `offPass` varchar(100) NOT NULL,
  `skypePass` varchar(100) NOT NULL,
  `HPC_Uni_Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`serialNo`, `imgPath`, `name`, `modeOfEmployment`, `Post`, `EmployeeID`, `DOJ`, `confirmDate`, `DOR`, `trainingStartDate`, `trainingCompletionDate`, `certiDOB`, `actualDOB`, `fatherName`, `pContactNo`, `eContactNo`, `presentAddr`, `presentAddrCity`, `presentAddrCountry`, `permanentAddr`, `permaAddrCity`, `permaAddrCountry`, `pEmailID`, `oEmailID`, `skypeID`, `blood`, `aadhar`, `PAN`, `voterID`, `passport`, `spouseContact`, `BankAccountNum`, `accountType`, `IFSC`, `bankName`, `bankAddress`, `10th`, `12th`, `degName`, `degMarks`, `passYear`, `Salary`, `offPass`, `skypePass`, `HPC_Uni_Pass`) VALUES
(404, '../uploads/', '', '-', 'Software Engineer', 'HPCS17000', '2017-12-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'akjsd@jnd.omc', 'kjfd', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjnd', 'kjnfd', 'xjz20aEp7t'),
(395, '../uploads/', '', '-', 'Software Engineer', 'HPCS17001', '2016-11-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kusd2kjd@kjds.com', 'kjnsd', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'jknsdkj@dkj.', 'kjnd', 'EoVttZQ738'),
(358, '../uploads/', 'abcabcabc', '-', 'Software Engineer', 'HPCS17002', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'alknsd@lkc.com', '89u2e', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'laskdn', 'ladsj', 'BuvGboLuBK'),
(384, '../uploads/', '', '-', 'Software Engineer', 'HPCS17003', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kadns@knd.com', 'ajn', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjdakjsd', 'kjsd', 'vTt66Xig6X'),
(385, '../uploads/', '', '-', 'Software Engineer', 'HPCS17004', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'asiodj@djkf.casd', 'sdkj', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjasdnj', 'kjsd', 'o0C5Bke4gF'),
(388, '../uploads/', '', '-', 'Software Engineer', 'HPCS17005', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'adkjn@djk.cisdaf', 'lkjdoiq', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjfd', 'wd', 'a7PjFodd8U'),
(390, '../uploads/', '', '-', 'Software Engineer', 'HPCS17006', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'lakjn@fidskl.com', 'iq', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'idbui', 'iiuhhhiw', 'w22b9xEW6z'),
(392, '../uploads/', '', '-', 'Software Engineer', 'HPCS17007', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kads@Edkj.cijs', 'kjnd', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'jkd', 'adkjsa', 'BYKM3FhFqD'),
(394, '../uploads/', '', '-', 'Software Engineer', 'HPCS17008', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kdjnsk@sjdk.cpdn', 'dkj', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kdj', 'kjds', 'I6wGXAI1cz'),
(398, '../uploads/', '', '-', 'Software Engineer', 'HPCS17009', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kdn@jksd.comakj', 'kjnd', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'knd', 'kjnd', 'p8mFF9Zntg'),
(400, '../uploads/', '', '-', 'Software Engineer', 'HPCS17010', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'kjds2dekj2@kjd.com', 'sdkjn', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjndkjn', 'kasjnd', 'YBcL1gilQR'),
(402, '../uploads/', '', '-', 'Software Engineer', 'HPCS17011', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'akdsukkjn@kjd.com', 'kjn', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'jknd', 'dkajsad', 'cLDaP53s4j'),
(356, '../uploads/chuck.jpg', 'Yashh', 'Full Time', 'Software Engineer', 'HPCS17012', '2017-04-10', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'abc@askdmlkm.comuasd', '3wkm21', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 2147483647, 'asdlklm', '23eklm', 'LzP695qJ3B'),
(405, '../uploads/', '', '-', 'Software Engineer', 'HPCS17013', '2017-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', 'aksjd@dkc.com', 'kjnd', 'O-', 0, '', '', '', '', 0, 'Savings', '', '', '', 0, 0, '', 0, 0, 0, 'kjnd', 'kjd', 'scm18QU9J2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` varchar(500) NOT NULL,
  `loginPassword` varchar(500) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `EmpId` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `loginPassword`, `Name`, `EmpId`) VALUES
('yash@hpcsphere.com', 'yash1234', 'Yash', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `serialNo` (`serialNo`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `index` (`serialNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `serialNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `serialNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `StatusUpdate` ON SCHEDULE EVERY 5 SECOND STARTS '2017-06-22 00:00:00' ENDS '2020-07-23 00:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE checklist SET `checklistStatus` = 1 where `hpcs_email_ID`= 1 and `prepare_laptop`= 1 and `email_social`=1 and `email_instructions`=1 and `email_mlq4`=1 and `email_teamsID`=1 and `email_joiningProcess`=1 and `GoogleDriveAccount`=1 and `FillDetailsSheet`=1 and `collectDocs`=1 and `initialVerification`=1 and `handOriginals`=1 and `giveLaptop`=1 and `giveNotebookPen`=1 and `greetingCard`=1 and `trainingSchedule`=1 and `welcomeMeeting`=1 and `welcomeEmail`=1 and `skypeID`=1 and `pingID`=1 and `addInSkypeGroup`=1 and `giveJoiningDocs`=1 and `signOnDocs`=1 and `performaSheet`=1 and `verifyPersonalContact`=1 and `createEmpFile`=1 and `placeSignedDocs`=1 and `addBankKotak`=1 and `attendanceSheet`=1 and `fillEmpDetailSheet`=1 and `fillEmpSalarySheet`=1 and `addBirthday`=1 and `addMarriage`=1 and `addOneYearCompletion`=1 and `addOnePointFiveYear`=1 and `probationCompletion`=1 and `addInWhatsappGroup`=1 and `verifyOriginals`=1 and `returnDocsToEmp`=1 and `EmpAddressInGMap`=1 and `WordpressAccount`=1 and `OCLsheet`=1 and `salaryReview`=1$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
