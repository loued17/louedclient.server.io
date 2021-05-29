-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 06:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_doctordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `adminpassword`) VALUES
('1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `individualID` int(11) NOT NULL,
  `offID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `Date`, `Time`, `individualID`, `offID`) VALUES
(0, '2020-10-08', '00:43:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `X` int(11) NOT NULL,
  `descID` int(11) NOT NULL,
  `descName` varchar(30) NOT NULL,
  `appointment` varchar(50) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `officialIDdesc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `official` (
  `officialID` int(11) NOT NULL,
  `officialname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `official` (`officialID`, `officialname`, `email`, `Address`, `ContactNumber`, `password`, `categorey`) VALUES
(1, 'Loued BRGY. appointment', 'delacruzloued@gmail.com','Talacogon ADS','09108870138','loueddelacruz','admin');

-- --------------------------------------------------------

--
--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `iID` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `individual` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Citizenship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `individual` (`UserID`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`,`Citizenship`) VALUES
(1, 'loueddelacruz', 'Talacogon ADS', '09108870138', 'delacruzloued@gmail.com', 'loueddelacruz','filipino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `individualoapp` (`individualID`),
  ADD KEY `offindi` (`offID`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`X`),
  ADD KEY `descindividualID` (`descID`),
  ADD KEY `descofficialID` (`officialIDdesc`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`officialID`);

--
-- Indexes for table `donor`

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
