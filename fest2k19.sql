-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 01:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fest2k19`
--

-- --------------------------------------------------------

--
-- Table structure for table `ainbox`
--

CREATE TABLE `ainbox` (
  `amessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ainbox`
--

INSERT INTO `ainbox` (`amessage`) VALUES
('hey this fest is awesom');

-- --------------------------------------------------------

--
-- Table structure for table `epassorders`
--

CREATE TABLE `epassorders` (
  `name` varchar(200) NOT NULL,
  `rollnum` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `passtype` varchar(200) NOT NULL,
  `paytype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epassorders`
--

INSERT INTO `epassorders` (`name`, `rollnum`, `email`, `phone`, `college`, `branch`, `passtype`, `paytype`) VALUES
('shashi', '15841A1206', 'shashi30@ymail.com', '9100523006', 'ATRI', 'CSE', 'Fest Regular Pass', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`name`, `email`, `phone`, `message`) VALUES
('shashi', 'shashi30@ymail.com', '8686864770', 'Hey I want Pass for Your Fest.');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `name` varchar(200) NOT NULL,
  `rollnum` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `eventcategory` varchar(200) NOT NULL,
  `eventtype` varchar(200) NOT NULL,
  `parttype` varchar(200) NOT NULL,
  `group` varchar(400) NOT NULL,
  `paytype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`name`, `rollnum`, `email`, `phone`, `college`, `branch`, `eventcategory`, `eventtype`, `parttype`, `group`, `paytype`) VALUES
('Mark', '15841A1222', 'bm9618227359@gmail.com', '9100523006', 'ASTRA', 'IT', 'Cultural', 'Swara Madhuri(Solo, Duet, Group)', 'Group', 'Revanth\r\nShravan', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `postmessage` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`postmessage`) VALUES
('Hey Borealis is Scheduled on 3rd and 4th April 2019. I Request all the Students to take part in the event and make our College fest grand Success.'),
('Fest Pass is Mandatory for all students.Irrespective whether you attend the fest or not you need to pay the fest pass price which is of Rs. 300/-.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
