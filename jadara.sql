-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 08:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jadara`
--

-- --------------------------------------------------------

--
-- Table structure for table `jcomment`
--

CREATE TABLE IF NOT EXISTS `jcomment` (
  `com_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `coment` varchar(200) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jcomment`
--

INSERT INTO `jcomment` (`com_id`, `name`, `age`, `coment`) VALUES
(3, 'ggg', 7, 'jjj'),
(7, 'mmm', 4, 'hhhiiii');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `age` int(4) NOT NULL,
  `year` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(5) NOT NULL,
  `cause` varchar(200) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `Qualification`, `age`, `year`, `email`, `password`, `cause`) VALUES
(5, 'gg', 'bb', 12, 2000, 'dddd@hotmail.com', 123, 'hi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
