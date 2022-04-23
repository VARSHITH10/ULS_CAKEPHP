-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 10:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uls`
--

-- --------------------------------------------------------

--
-- Table structure for table `orcid_batch`
--
CREATE DATABASE uls;
use uls;
CREATE TABLE `orcid_batch` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(512) DEFAULT NULL,
  `SUBJECT` varchar(512) DEFAULT NULL,
  `BODY` longtext DEFAULT NULL,
  `FROM_NAME` varchar(64) DEFAULT NULL,
  `FROM_ADDR` varchar(64) DEFAULT NULL,
  `REPLY_TO` varchar(64) DEFAULT NULL,
  `ORCID_BATCH_CREATOR_ID` int(11) DEFAULT NULL,
   PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_batch_creators`
--

CREATE TABLE `orcid_batch_creators` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) DEFAULT NULL,
  `FLAGS` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_batch_groups`
--

CREATE TABLE `orcid_batch_groups` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(512) DEFAULT NULL,
  `GROUP_DEFINITION` varchar(2048) DEFAULT NULL,
  `EMPLOYEE_DEFINITION` varchar(2048) DEFAULT NULL,
  `STUDENT_DEFINITION` varchar(2048) DEFAULT NULL,
  `CACHE_CREATION_DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_batch_group_caches`
--

CREATE TABLE `orcid_batch_group_caches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORCID_BATCH_GROUP_ID` int(11) DEFAULT NULL,
  `ORCID_USER_ID` int(11) DEFAULT NULL,
  `DEPRECATED` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_batch_triggers`
--

CREATE TABLE `orcid_batch_triggers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(512) DEFAULT NULL,
  `ORCID_STATUS_TYPE_ID` int(11) DEFAULT NULL,
  `ORCID_BATCH_ID` int(11) DEFAULT NULL,
  `TRIGGER_DELAY` int(11) DEFAULT NULL,
  `ORCID_BATCH_GROUP_ID` int(11) DEFAULT NULL,
  `BEGIN_DATE` date DEFAULT NULL,
  `REQUIRE_BATCH_ID` int(11) DEFAULT NULL,
  `MINIMUM_REPEAT` int(11) DEFAULT NULL,
  `MAXIMUM_REPEAT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_emails`
--

CREATE TABLE `orcid_emails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORCID_USER_ID` int(11) DEFAULT NULL,
  `ORCID_BATCH_ID` int(11) DEFAULT NULL,
  `QUEUED` date DEFAULT NULL,
  `SENT` date DEFAULT NULL,
  `CANCELLED` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_statuses`
--

CREATE TABLE `orcid_statuses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORCID_USER_ID` int(11) DEFAULT NULL,
  `ORCID_STATUS_TYPE_ID` int(11) DEFAULT NULL,
  `STATUS_TIMESTAMP` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_status_types`
--

CREATE TABLE `orcid_status_types` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(512) DEFAULT NULL,
  `SEQ` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orcid_users`
--

CREATE TABLE `orcid_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(8) DEFAULT NULL,
  `ORCID` varchar(19) DEFAULT NULL,
  `TOKEN` varchar(255) DEFAULT NULL,
  `CREATED` date DEFAULT NULL,
  `MODIFIED` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
