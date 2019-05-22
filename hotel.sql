-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 09:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `authenticate`
--

CREATE TABLE IF NOT EXISTS `authenticate` (
  `userid` int(50) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `authenticate`
--

INSERT INTO `authenticate` (`userid`, `fullname`, `email`, `phonenumber`, `address`, `username`, `password`) VALUES
(1, 'Mike Adamgbe', 'mike@gmail.com', 6064735, 'mike avenue', 'mike', 'mike123'),
(2, 'bright hope', 'bright@gmail.com', 347642434, 'bright avenue', 'bright', 'bright123'),
(3, 'Sarah Hope', 'sarah@gmail.com', 87653, 'sarah avenue', 'sarah', 'sarah123'),
(4, 'Administrator', 'admin@gmail.com', 123456789, 'admin avenue', 'admin', 'admin123'),
(5, 'Emman Bassey', 'ema@gmail.com', 2147483647, 'ema avenue', 'emman', 'emman123'),
(6, 'Koko Ette', 'koko@gmail.com', 88283737, 'ette avenue', 'koko', 'koko123'),
(7, 'Mr. Okon', 'okon@gmail.com', 5623, 'okon avenue', 'okon', 'okon123'),
(9, 'okay', 'me@gmail.com', 8737, 'thats its', 'me', 'ab86a1e1ef70dff97959067b723c5c24'),
(11, 'okay', 'me@gmail.com', 8737, 'thats its', 'ok', '444bcb3a3fcf8389296c49467f27e1d6');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingno` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `numberofpeople` int(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`bookingno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10041 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingno`, `username`, `roomtype`, `arrival`, `departure`, `numberofpeople`, `price`) VALUES
(10033, 'mike', 'Deluxe Room', '2018-10-08', '2018-10-12', 2, 'NGN 8000'),
(10035, 'admin', 'Standard Single Room', '2018-10-02', '2018-10-05', 2, 'NGN 2500'),
(10036, 'koko', 'Deluxe Room', '2018-10-02', '2018-10-05', 2, 'NGN 8000'),
(10037, 'sarah', 'Standard Single Room', '2018-10-04', '2018-10-06', 1, 'NGN 1500'),
(10038, 'koko', 'Standard Double Room', '2018-10-07', '2018-10-13', 3, 'NGN 5000'),
(10039, 'me', 'Standard Single Room', '2018-10-11', '2018-10-12', 1, 'NGN 1500'),
(10040, 'ok', 'Standard Single Room', '2018-10-15', '2018-10-10', 1, 'NGN 1500');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
