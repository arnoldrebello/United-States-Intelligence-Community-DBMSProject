-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2021 at 07:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DBMSProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `CIA`
--

CREATE TABLE `CIA` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Rank` varchar(40) DEFAULT NULL,
  `Directorate` varchar(25) DEFAULT NULL,
  `Missions` varchar(50) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CIA`
--

INSERT INTO `CIA` (`AgentID`, `Name`, `Rank`, `Directorate`, `Missions`, `operatingcountry`) VALUES
('168453', 'William Brandt', 'Field Agent', 'CIA', 'Unknown', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `FBI`
--

CREATE TABLE `FBI` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Branch` varchar(40) DEFAULT NULL,
  `Missions` varchar(25) DEFAULT NULL,
  `specialisedweapons` varchar(50) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `FBI`
--

INSERT INTO `FBI` (`AgentID`, `Name`, `Branch`, `Missions`, `specialisedweapons`, `operatingcountry`) VALUES
('8394857', 'Col. Sanders', 'Washington', 'Mission Winnow', 'Sniper Rifles', 'United States of America');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `AgentID` varchar(25) NOT NULL,
  `PassCode` varchar(25) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`AgentID`, `PassCode`, `lastlogin`) VALUES
('1EP16CS014', 'Arnold', '2021-01-05 10:33:54'),
('1EP16CS114', 'Vignesh', '2021-01-05 02:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `NSA`
--

CREATE TABLE `NSA` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Organisation` varchar(40) DEFAULT NULL,
  `Missions` varchar(25) DEFAULT NULL,
  `technicalskillset` varchar(50) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `NSA`
--

INSERT INTO `NSA` (`AgentID`, `Name`, `Organisation`, `Missions`, `technicalskillset`, `operatingcountry`) VALUES
('534895', 'Benji Dunn', 'NSA Sweden Base', 'Bio Weapon Alerts', 'Cyber Security', 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `policecomplaints`
--

CREATE TABLE `policecomplaints` (
  `Complaint` text NOT NULL,
  `Country` varchar(40) NOT NULL,
  `AssignedForce` varchar(40) NOT NULL,
  `Assignedagent` varchar(40) DEFAULT 'not assigned yet',
  `Status` varchar(20) DEFAULT 'unresolved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policecomplaints`
--

INSERT INTO `policecomplaints` (`Complaint`, `Country`, `AssignedForce`, `Assignedagent`, `Status`) VALUES
('Kremlin Infiltration', 'Russia', 'NSA', 'not assigned yet', 'unresolved');

-- --------------------------------------------------------

--
-- Table structure for table `USAF`
--

CREATE TABLE `USAF` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Missions` varchar(40) DEFAULT NULL,
  `airbase` varchar(25) DEFAULT NULL,
  `aircraftinventory` varchar(50) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USAF`
--

INSERT INTO `USAF` (`AgentID`, `Name`, `Missions`, `airbase`, `aircraftinventory`, `operatingcountry`) VALUES
('6543456', 'Col. Williams', 'Drone Strike in Baghdad', 'Buckley Airfield', 'F16 - Raptor', 'Iran');

-- --------------------------------------------------------

--
-- Table structure for table `USIC`
--

CREATE TABLE `USIC` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `dateofbirth` varchar(40) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USIC`
--

INSERT INTO `USIC` (`AgentID`, `Name`, `dateofbirth`, `operatingcountry`) VALUES
('13425', 'William', '12-32-43', 'USA'),
('13424', 'William', '12-32-43', 'Russia');

-- --------------------------------------------------------

--
-- Table structure for table `USMC`
--

CREATE TABLE `USMC` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Missions` varchar(40) DEFAULT NULL,
  `division` varchar(25) DEFAULT NULL,
  `specialisedweapons` varchar(50) DEFAULT NULL,
  `operatingcountry` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USMC`
--

INSERT INTO `USMC` (`AgentID`, `Name`, `Missions`, `division`, `specialisedweapons`, `operatingcountry`) VALUES
('243243', 'Marine Corp', 'rescuing lives', 'fort baxter', 'MF5', 'France');

-- --------------------------------------------------------

--
-- Table structure for table `USNavy`
--

CREATE TABLE `USNavy` (
  `AgentID` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `operatingforce` varchar(40) DEFAULT NULL,
  `specialisedequipment` varchar(25) DEFAULT NULL,
  `operatingcountry` varchar(50) DEFAULT NULL,
  `Missions` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USNavy`
--

INSERT INTO `USNavy` (`AgentID`, `Name`, `operatingforce`, `specialisedequipment`, `operatingcountry`, `Missions`) VALUES
('954837', 'Lt. Bert', 'Seal Team Six', 'Aircraft Carrier - 3', 'Iraq', 'Not Assigned'),
('954837', 'Lt. Bert', 'Seal Team Six', 'Aircraft Carrier', 'Iraq', 'Not Assigned'),
('954837', 'Lt Bert', 'Seal Team Six', 'Aircraft Carrier', 'Iraq', 'Not Assigned');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
