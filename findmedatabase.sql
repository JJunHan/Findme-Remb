-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 08:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `casualdb`
--

CREATE TABLE `casualdb` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casualdb`
--

INSERT INTO `casualdb` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 37, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 59, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 9, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 6, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kook', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kooy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 39, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 19, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 38, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ccasualdb`
--

CREATE TABLE `ccasualdb` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccasualdb`
--

INSERT INTO `ccasualdb` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 37, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 59, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 9, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 6, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kook', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kooy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 39, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 19, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 38, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel1db`
--

CREATE TABLE `clevel1db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel1db`
--

INSERT INTO `clevel1db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('junhan', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('nic', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('spencer', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('yesyes', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel2db`
--

CREATE TABLE `clevel2db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel2db`
--

INSERT INTO `clevel2db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('spencer', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel3db`
--

CREATE TABLE `clevel3db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel3db`
--

INSERT INTO `clevel3db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('kok', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel4db`
--

CREATE TABLE `clevel4db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel4db`
--

INSERT INTO `clevel4db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kook', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel5db`
--

CREATE TABLE `clevel5db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel5db`
--

INSERT INTO `clevel5db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 20, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kooy', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clevel6db`
--

CREATE TABLE `clevel6db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clevel6db`
--

INSERT INTO `clevel6db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 90, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level1db`
--

CREATE TABLE `level1db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level1db`
--

INSERT INTO `level1db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('nic', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('spencer', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level2db`
--

CREATE TABLE `level2db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level2db`
--

INSERT INTO `level2db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('kok', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('spencer', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level3db`
--

CREATE TABLE `level3db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level3db`
--

INSERT INTO `level3db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 10, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level4db`
--

CREATE TABLE `level4db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level4db`
--

INSERT INTO `level4db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn`', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kook', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level5db`
--

CREATE TABLE `level5db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level5db`
--

INSERT INTO `level5db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 20, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 80, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kooy', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('morgan', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `level6db`
--

CREATE TABLE `level6db` (
  `ID` varchar(500) NOT NULL,
  `Score` int(255) NOT NULL,
  `Image99` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(500) NOT NULL,
  `Great` varchar(500) NOT NULL,
  `Perfect` varchar(500) NOT NULL,
  `Image2` varchar(500) NOT NULL,
  `Image3` varchar(500) NOT NULL,
  `Image4` varchar(500) NOT NULL,
  `Image5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level6db`
--

INSERT INTO `level6db` (`ID`, `Score`, `Image99`, `Image`, `Image1`, `Great`, `Perfect`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a1234', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('a12345', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adf', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfafd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('adfo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alibaba', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('alimuhaha', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('annie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('brendon', 70, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('bryann', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('chris', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ed2', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('edelle1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('eeee', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ellie', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('enchi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ffd', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('fin', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('flynn', 40, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', '', ''),
('flynn`', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ghelo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('guy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hads', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hello1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helloolo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helo', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('helolol', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('hii', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ihi', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jane', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('jibb', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('john', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('joseph', 50, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', ''),
('jun', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhan', 10, 'tryharder.png', 'badge10.png', '', '', '', '', '', '', ''),
('junhan1', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('junhan12323', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('Junhanj123123', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kik', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('kok', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ldsaogl', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('lelel', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('mary', 20, 'tryharder.png', 'badge10.png', 'badge20.png', '', '', '', '', '', ''),
('morgan', 60, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('nasshwa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nic', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('nicc', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('oolofa', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sarah', 90, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', 'perfect.png', 'badge30.png', 'badge40.png', 'badge50.png', 'badge60.png'),
('sjks', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sr', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('sup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tay', 30, 'tryharder.png', 'badge10.png', 'badge20.png', 'great1.png', '', 'badge30.png', '', '', ''),
('tes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('troy', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('tyler', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('wasup', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('william', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('ye', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yea', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yelos', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yes', 0, 'tryharder.png', '', '', '', '', '', '', '', ''),
('yesyes', 0, 'tryharder.png', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `x1`
--

CREATE TABLE `x1` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x1`
--

INSERT INTO `x1` (`ID`, `Score`) VALUES
('jibb', '14'),
('jibb', '12');

-- --------------------------------------------------------

--
-- Table structure for table `x2`
--

CREATE TABLE `x2` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x2`
--

INSERT INTO `x2` (`ID`, `Score`) VALUES
('jibb', '22'),
('jibb', '23'),
('jibb', '16');

-- --------------------------------------------------------

--
-- Table structure for table `x3`
--

CREATE TABLE `x3` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x3`
--

INSERT INTO `x3` (`ID`, `Score`) VALUES
('jibb', '21'),
('jibb', '12'),
('kik', '10');

-- --------------------------------------------------------

--
-- Table structure for table `x4`
--

CREATE TABLE `x4` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x4`
--

INSERT INTO `x4` (`ID`, `Score`) VALUES
('jibb', '25'),
('jibb', '21'),
('jibb', '12'),
('jibb', '42');

-- --------------------------------------------------------

--
-- Table structure for table `x5`
--

CREATE TABLE `x5` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x5`
--

INSERT INTO `x5` (`ID`, `Score`) VALUES
('jibb', '12'),
('jibb', '41');

-- --------------------------------------------------------

--
-- Table structure for table `x6`
--

CREATE TABLE `x6` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x6`
--

INSERT INTO `x6` (`ID`, `Score`) VALUES
('jibb', '23'),
('jibb', '30');

-- --------------------------------------------------------

--
-- Table structure for table `x7`
--

CREATE TABLE `x7` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x7`
--

INSERT INTO `x7` (`ID`, `Score`) VALUES
('jibb', '19\r\n\r\n'),
('jibb', '10');

-- --------------------------------------------------------

--
-- Table structure for table `z1`
--

CREATE TABLE `z1` (
  `ID` varchar(250) NOT NULL,
  `Score` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z1`
--

INSERT INTO `z1` (`ID`, `Score`) VALUES
('jh', '32'),
('jibb', '12'),
('jibb', '12'),
('jibb', '31'),
('jibb', '2'),
('jibb', '2'),
('jun', '10'),
('kik', ''),
('kik', ''),
('kik', ''),
('kik', ''),
('kik', ''),
('hi', ''),
('hi', ''),
('', ''),
('hello', ''),
('yes', ''),
('helo', ''),
('helo', ''),
('ihi', ''),
('hads', ''),
('ye', ''),
('hihi', ''),
('ffd', ''),
('adf', '');

-- --------------------------------------------------------

--
-- Table structure for table `z2`
--

CREATE TABLE `z2` (
  `ID` varchar(500) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z2`
--

INSERT INTO `z2` (`ID`, `Score`) VALUES
('jibb', '15'),
('jibb', '12'),
('jibb', '23');

-- --------------------------------------------------------

--
-- Table structure for table `z3`
--

CREATE TABLE `z3` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z3`
--

INSERT INTO `z3` (`ID`, `Score`) VALUES
('jibb', '2'),
('jibb', '2'),
('jibb', '23'),
('jibb', '41'),
('jibb', '23'),
('jibb', '23'),
('kik', '10');

-- --------------------------------------------------------

--
-- Table structure for table `z4`
--

CREATE TABLE `z4` (
  `ID` varchar(266) NOT NULL,
  `Score` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z4`
--

INSERT INTO `z4` (`ID`, `Score`) VALUES
('jibb', '12'),
('jibb', '4'),
('jibb', '41'),
('jibb', '23'),
('jibb', '2'),
('jibb', '2');

-- --------------------------------------------------------

--
-- Table structure for table `z5`
--

CREATE TABLE `z5` (
  `ID` varchar(256) NOT NULL,
  `Score` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z5`
--

INSERT INTO `z5` (`ID`, `Score`) VALUES
('jibb', '21'),
('jibb', '2'),
('jibb', '3'),
('jibb', '12'),
('jibb', '1'),
('jibb', '44');

-- --------------------------------------------------------

--
-- Table structure for table `z6`
--

CREATE TABLE `z6` (
  `ID` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z6`
--

INSERT INTO `z6` (`ID`, `Score`) VALUES
('jibb', '15'),
('jibb', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casualdb`
--
ALTER TABLE `casualdb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ccasualdb`
--
ALTER TABLE `ccasualdb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel1db`
--
ALTER TABLE `clevel1db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel2db`
--
ALTER TABLE `clevel2db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel3db`
--
ALTER TABLE `clevel3db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel4db`
--
ALTER TABLE `clevel4db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel5db`
--
ALTER TABLE `clevel5db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clevel6db`
--
ALTER TABLE `clevel6db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level1db`
--
ALTER TABLE `level1db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level2db`
--
ALTER TABLE `level2db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level3db`
--
ALTER TABLE `level3db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level4db`
--
ALTER TABLE `level4db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level5db`
--
ALTER TABLE `level5db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level6db`
--
ALTER TABLE `level6db`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
