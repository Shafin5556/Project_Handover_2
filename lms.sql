-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2019 at 09:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookorders`
--

DROP TABLE IF EXISTS `bookorders`;
CREATE TABLE IF NOT EXISTS `bookorders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookorders`
--

INSERT INTO `bookorders` (`order_id`, `book_id`, `book_name`, `student_id`, `student_name`, `order_status`) VALUES
(6, 31, 'cccc', 7, 'faseehaaa', 'accepted'),
(4, 10, 'prasho', 7, 'faseeha', 'requested'),
(5, 12, 'prasho', 7, 'faseeha', 'requested');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `status`, `type`) VALUES
(31, 'cccc', 'ccccccccccccc', 'not available', 'novel'),
(9, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(10, 'prasho', 'hhhhhhhhhhhh', 'not available', 'autobiography'),
(11, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(12, 'prasho', 'hhhhhhhhhhhh', 'not available', 'autobiography'),
(13, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(14, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(15, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(16, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(17, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(18, 'prasho', 'hhhhhhhhhhhh', 'available', 'autobiography'),
(19, 'sssssssssss', 'ssssssssssss', 'available', 'biography'),
(20, 'sssssssssss', 'ssssssssssss', 'available', 'biography'),
(22, 'hhhhhhhhhh', 'kkkkkkkkkkkk', 'available', 'novel'),
(23, 'hhhhhhhhhh', 'kkkkkkkkkkkk', 'available', 'novel'),
(24, 'hhhhhhhhhh', 'kkkkkkkkkkkk', 'available', 'novel'),
(25, 'tgggggggggg', 'llllllllllll', 'available', 'biography'),
(26, 'tgggggggggg', 'llllllllllll', 'available', 'biography'),
(27, 'tgggggggggg', 'llllllllllll', 'available', 'biography'),
(28, 'tgggggggggg', 'llllllllllll', 'available', 'biography'),
(29, '11111111', '11111111111', 'available', 'autobiography'),
(30, 'ffff', 'ffffff', 'available', 'autobiography');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

DROP TABLE IF EXISTS `librarian`;
CREATE TABLE IF NOT EXISTS `librarian` (
  `librarian_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`librarian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `name`, `emailid`, `phone`, `password`, `gender`, `dob`, `adress`, `status`) VALUES
(1, 'jishnujith ne', 'dede@gmail', 9048837780, 'vvvvvvvv', 'other', '2017-01-01', 'bbbbb', 'active'),
(2, 'jishnujithh', 'dedeh@gmail', 9048837780, 'hhhhhhhh', 'on', '2017-01-01', 'bbbbb', 'inactive'),
(3, 'jj', 'jjj@gmail.com', 9045421211, '10101010', 'male', '2019-09-17', 'hhhhhh', 'inactive'),
(4, 'jishnujith', 'jishnujith@ggmail.com', 9048837780, 'aaaaaaaa', 'on', '2017-01-01', 'nnnnnnn', 'inactive'),
(5, 'classmate', 'classmate@gmail.com', 9874123321, '147147147', 'other', '2017-01-01', '147147147', 'active'),
(6, 'sruth', 'sruthi@gmail.com', 9048837780, '123123123', 'other', '2017-01-01', 'aaaa', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `adress` varchar(200) NOT NULL,
  `maxreq` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `uniquemail` (`emailid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `emailid`, `phone`, `password`, `gender`, `dob`, `adress`, `maxreq`) VALUES
(1, 'haaa pinneyyy', 'jishnujith.ravan@gmail.com', 9048837780, 'ffffffff', 'other', '2017-01-01', '1111', 3),
(2, 'qqqqqqqqqqqqqqqq', 'ss@email.com', 9048837780, '11111111', 'other', '2017-01-01', 'bbbbb', 3),
(3, 'erbgetb', 'ssvv@email.com', 9048837780, 'vvvvvvvv', 'on', '2017-01-01', 'bbbbb', 3),
(4, 'jishnujith', 'jishnujitvan@gmail.com', 9048837780, '11111111', 'on', '2017-01-01', '44444', 0),
(5, 'jjjjjjjjjjjj', 'jj@gmail.com', 9045421211, '10101010', 'male', '2019-09-11', 'cccc', 2),
(6, 'jishnu', 'jishnu@gmail.com', 9048837780, '123123123', 'on', '2017-01-11', 'hhhhhhhhhhh', 3),
(7, 'faseehaaallllllllll', 'faseeha@gmail.com', 9048837780, 'Aa1234567', 'other', '2017-01-01', 'bbbbb', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
