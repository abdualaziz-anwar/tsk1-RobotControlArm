-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 08:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robottable`
--

-- --------------------------------------------------------

--
-- Table structure for table `robottable`
--

CREATE TABLE `robottable` (
  `eng1` int(11) NOT NULL,
  `eng2` int(11) NOT NULL,
  `eng3` int(11) NOT NULL,
  `eng4` int(11) NOT NULL,
  `eng5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robottable`
--

INSERT INTO `robottable` (`eng1`, `eng2`, `eng3`, `eng4`, `eng5`) VALUES
(0, 0, 0, 0, 67),
(63, 91, 78, 29, 23),
(63, 91, 78, 29, 23),
(63, 91, 78, 29, 23),
(63, 91, 78, 29, 23),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(45, 0, 0, 0, 0),
(0, 59, 31, 80, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
