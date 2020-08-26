-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 06:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `camount` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `need` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`name`, `fname`, `address`, `mobile_no`, `nid`, `email`, `gender`, `district`, `camount`, `cname`, `need`) VALUES
('dffd', 'dfdf', 'dfd', '3453', '23423424', 'majedul@gmail.com', 'পুরুষ', '32423w', 'rwq', 'qwewqweqw', 'qweqwrewretwerte'),
('Shohel Arman', 'sdfddf', 'kushtia', '89475938', '3432453', 'arman@diu.edu.bd', 'পুরুষ', 'kushtia', '1akor', 'rice', 'shar'),
('Majedul', 'abdus salam', 'kaunia', '353454', '4352543245324', 'moni@gmail.com', 'পুরুষ', 'rangpur', '2 akor', 'rice', 'kitnashk'),
('majedul', 'abdus salam', 'kaunia', '353454', '463245345345', 'majedul@gmail.com', 'পুরুষ', 'rangpur', '2 akor', 'jut', 'shar');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `suggestions` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`name`, `address`, `email`, `mobile_no`, `nid`, `suggestions`) VALUES
('rakib', 'pabna', 'sdhfsdf@gmail.com', '235235', '4352543245324', 'sadfgadrhagdfgsfdsdfhgfs'),
('Majedul', 'kaunia', 'majedulb@gmail.com', '353454', '4632453453', ''),
('babu', 'kaunia', 'majedulb@gmail.com', '353454', '463245345345', '');

-- --------------------------------------------------------

--
-- Table structure for table `exibition`
--

CREATE TABLE `exibition` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `camount` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exibition`
--

INSERT INTO `exibition` (`name`, `fname`, `address`, `mobile_no`, `nid`, `email`, `gender`, `district`, `camount`, `cname`) VALUES
('babu', 'abdus salam', 'kaunia', '353454', '463245345345', 'majedulb@gmail.com', 'পুরুষ', 'rangpur', '2 akor', 'jut');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `problem` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `fname`, `address`, `mobile_no`, `nid`, `email`, `gender`, `district`, `problem`) VALUES
('moni', 'abdus salam', 'sdfs', '235235', '3454353453453', 'majedulb@gmail.com', 'মহিলা', 'rangpur', 'zdfsz'),
('rakib', 'atique', 'pabna', '453453', '4352543245324', 'sdhfsdf@gmail.com', 'পুরুষ', 'pabna', 'gddfgdfgsd'),
('sd', 'sdfds', 'sdfs', '235235', '4534534534', 'babu@gmail.com', 'পুরুষ', 'rangpur', 'sfasdgadg'),
('Majedul', 'abdus salam', 'kaunia', '353454', '463245345345', 'babu@gmail.comda', 'পুরুষ', 'rangpur', 'hfsh dhf d hfh sh sfhfh gh sd');

-- --------------------------------------------------------

--
-- Table structure for table `machineries`
--

CREATE TABLE `machineries` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `camount` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mcode` varchar(50) NOT NULL,
  `advance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machineries`
--

INSERT INTO `machineries` (`name`, `fname`, `address`, `mobile_no`, `nid`, `email`, `gender`, `district`, `camount`, `mname`, `mcode`, `advance`) VALUES
('Majedul', 'abdus salam', 'kaunia', '235235', '4352543245324', 'majedulb@gmail.com', 'পুরুষ', 'rangpur', '2 akor', 'dfsdf', 'sdfsdf', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `exibition`
--
ALTER TABLE `exibition`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `machineries`
--
ALTER TABLE `machineries`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
