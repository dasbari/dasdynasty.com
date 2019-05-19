-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 08:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `das bari`
--
CREATE DATABASE IF NOT EXISTS `das bari` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `das bari`;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `year` varchar(10) NOT NULL,
  `items` varchar(40) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`year`, `items`, `amount`) VALUES
('2019', 'Flower', 1150),
('2019', 'Dosokorma', 1150),
('2019', 'Thakur er Saaj', 3400),
('2019', 'Fruits', 3200),
('2019', 'Radhuni', 3000),
('2019', 'Fish', 5000),
('2019', 'Vegetable', 2500),
('2019', 'Bajna', 2200),
('2019', 'Electrician', 4700),
('2019', 'Grocery', 2800),
('2019', 'Thakur gorar silpi', 1150);

-- --------------------------------------------------------

--
-- Table structure for table `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
  `name` varchar(40) NOT NULL,
  `add` varchar(40) NOT NULL,
  `no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite`
--

INSERT INTO `invite` (`name`, `add`, `no`) VALUES
('biki mondal', 'naihati', 10),
('anjan das', 'tarakeswar', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Uid` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uid`, `Pass`, `Cpass`) VALUES
('apollo', 'apollo', 'apollo'),
('anjan das', '123', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
