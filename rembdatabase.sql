-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 08:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enchi`
--

-- --------------------------------------------------------

--
-- Table structure for table `r1`
--

CREATE TABLE `r1` (
  `ID` varchar(500) NOT NULL,
  `Score` varchar(500) NOT NULL,
  `Level` varchar(200) NOT NULL,
  `Valid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r1`
--

INSERT INTO `r1` (`ID`, `Score`, `Level`, `Valid`) VALUES
('hih', '1', '1', '3'),
('hih', '0', '1', '2'),
('hih', '1', '2', '3'),
('hih', '2', '3', '2'),
('hih', '2', '3', '2'),
('hih', '2', '1', '2'),
('hih', '2', '2', '2'),
('hih', '2', '2', '2'),
('yay', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `remb`
--

CREATE TABLE `remb` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remb`
--

INSERT INTO `remb` (`ID`, `Score`) VALUES
('1', 0),
('123', 0),
('a', 0),
('a1', 0),
('ad', 0),
('ad1', 0),
('adf', 0),
('adf1', 0),
('adfa', 0),
('adffa', 0),
('asdf1', 0),
('asdfa', 0),
('asdfl1', 0),
('ddmdm', 0),
('erq', 0),
('fag', 0),
('FAG1', 0),
('ff', 0),
('hello', 0),
('helo', 0),
('helo1', 0),
('helo12', 0),
('help', 0),
('help1', 0),
('hi', 0),
('hih', 0),
('hleo', 0),
('lao1', 0),
('sup', 0),
('testin', 0),
('yay', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `remb`
--
ALTER TABLE `remb`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
