-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 11:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `Name`, `email`, `contact`, `username`, `password`, `date_created`, `date_modify`) VALUES
(1, 'shweta Shahre', 'shweta@gmail.com', '8446506718', 'admin', 'fcea920f7412b5da7be0cf42b8c93759', '2015-01-09 00:00:00', '2015-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Mechanical'),
(2, 'Civil'),
(3, 'Computer'),
(4, 'Electronic'),
(5, 'Electrical'),
(6, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `desig_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `desig_name`) VALUES
(1, 'Ph.D'),
(2, 'M.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackarea`
--

CREATE TABLE `feedbackarea` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackarea`
--

INSERT INTO `feedbackarea` (`id`, `name`) VALUES
(1, 'good'),
(2, 'puncuality'),
(3, 'awerness'),
(4, 'performance'),
(5, 'teachingskills');

-- --------------------------------------------------------

--
-- Table structure for table `hod_comment`
--

CREATE TABLE `hod_comment` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_comment`
--

INSERT INTO `hod_comment` (`id`, `staff_id`, `dep_id`, `comment`) VALUES
(1, 1, 3, 'Good perfommnace IOmo'),
(2, 3, 6, 'good\r\n'),
(3, 3, 6, 'very good'),
(4, 6, 6, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `hod_data`
--

CREATE TABLE `hod_data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `conpass` varchar(50) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date_create` date NOT NULL,
  `date_modify` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_data`
--

INSERT INTO `hod_data` (`id`, `firstname`, `lastname`, `email`, `password`, `conpass`, `dep_id`, `contact`, `gender`, `date_create`, `date_modify`) VALUES
(8, 'V. A', 'Raje', 'raje@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, '8482856488', 'F', '2015-03-25', '0000-00-00'),
(9, 'Sunil ', 'joshi', 'joshi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 1, '8482856488', 'M', '2015-03-25', '0000-00-00'),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '', '', '2015-03-25', '0000-00-00'),
(11, 'yogesh', 'jog', 'jog@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 5, '8482856488', 'M', '2015-03-27', '0000-00-00'),
(12, 'alfiya', 'khan', 'alfi@gmail.com', '1e3f8db04919f512f577f2f5df0c72da', 'alfiya', 3, '3597146093', 'F', '2020-01-23', '0000-00-00'),
(13, 'alfiya', 'khan', 'alfi@gmail.com', '1e3f8db04919f512f577f2f5df0c72da', 'alfiya', 3, '3597146093', 'F', '2020-01-23', '0000-00-00'),
(14, 'alfiya', 'khan', 'alfi@gmail.com', '1e3f8db04919f512f577f2f5df0c72da', 'alfiya', 3, '3597146093', 'F', '2020-01-23', '0000-00-00'),
(15, 'alfiya', 'khan', 'alfi@gmail.com', '1e3f8db04919f512f577f2f5df0c72da', 'alfiya', 3, '3597146093', 'F', '2020-01-23', '0000-00-00'),
(16, 'zareena', 'khan', 'zareena@gmail.com', '0d2d11a7f96acde8bf1c5cdbcd5966c4', 'zaree', 3, '4545', 'F', '2020-01-24', '0000-00-00'),
(17, '', 'iqra', 'rimi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'uige', 0, '45', 'F', '2020-01-24', '0000-00-00'),
(18, '', 'iqra', 'rimi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'uige', 0, '45', 'F', '2020-01-24', '0000-00-00'),
(19, 'iqra', 'khan', 'iqra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '789064321', 3, '56719687876', 'F', '2020-01-24', '0000-00-00'),
(20, 'zeeshan', 'ansari', 'zeeshan@gmail.com', '6a8b34a9e786ff641b9b122cd1891722', 'zeechann', 6, '68784795432', 'M', '2020-01-24', '0000-00-00'),
(22, 'wasim', 'khan', 'wasim@gmail.com', '1cade269fca4202cfdd8104b6375368b', 'wasimkhanna', 6, '6985741230', 'M', '2020-01-24', '0000-00-00'),
(23, 'saiem', 'khan', 'saiem@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '123456789', 3, '982786469869', 'M', '2020-01-24', '0000-00-00'),
(26, 'safwan', 'khan', 'safwan@gmail.com', 'ee0be8ac5c7caee05b9be20dbc7a01a1', '', 5, '551787687486', 'M', '2020-01-24', '0000-00-00'),
(27, 'safwan', 'khan', 'safwan@gmail.com', 'ee0be8ac5c7caee05b9be20dbc7a01a1', '', 5, '9516203476', 'M', '2020-01-24', '0000-00-00'),
(28, 'abid', 'khan', 'abidk2611@gmail.com', '98dae0e08c01f9e64dc3f9650eb5a714', '', 5, '7894561230', 'M', '2020-01-24', '0000-00-00'),
(29, 'muskan', 'khan', 'muskan@gmail.com', 'd933996fd7dc03772be6a5fd7a0fb20c', '', 5, '7410852096', 'F', '2020-01-24', '0000-00-00'),
(30, 'anjum', 'sheikh', 'anjum@gmail.com', '9f37f99eb99699d49677bc94e6ccfe21', 'anjum1234567', 5, '846513268854', 'F', '2020-01-24', '0000-00-00'),
(31, 'gulnaaz', 'fatema', 'gulnaaz@gmail.com', '20c4ee699dae7e0e5c2965369fef69de', '534678988', 5, '9864102594', 'F', '2020-01-24', '0000-00-00'),
(33, 'mubashshir', 'khan', 'mubu@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 3, '7410852096', 'M', '2020-01-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `init_feedback`
--

CREATE TABLE `init_feedback` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `init_feedback`
--

INSERT INTO `init_feedback` (`id`, `status`, `date_start`, `date_end`) VALUES
(3, 0, '2015-03-21', '2015-03-21'),
(4, 0, '2015-03-25', '2015-03-25'),
(5, 0, '2015-03-25', '2015-03-25'),
(6, 0, '2015-03-25', '2015-03-25'),
(7, 0, '2015-03-25', '2015-03-25'),
(8, 0, '2015-03-25', '2015-03-25'),
(9, 0, '2015-03-25', '2015-03-25'),
(10, 0, '2015-03-25', '2015-03-25'),
(11, 0, '2015-03-25', '2015-03-25'),
(12, 0, '2015-03-25', '2015-03-25'),
(13, 0, '2015-03-26', '2015-03-26'),
(14, 0, '2015-03-26', '2015-03-26'),
(15, 0, '2015-03-26', '2015-03-26'),
(16, 0, '2015-03-26', '2015-03-26'),
(17, 0, '2020-01-23', '2020-01-23'),
(18, 0, '2020-01-23', '2020-01-23'),
(19, 0, '2020-01-24', '2020-01-24'),
(20, 0, '2020-01-26', '2020-01-26'),
(21, 1, '2020-01-26', '2020-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `principle_data`
--

CREATE TABLE `principle_data` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `create_data` datetime NOT NULL,
  `modify_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principle_data`
--

INSERT INTO `principle_data` (`id`, `name`, `email`, `password`, `con_pass`, `username`, `contact`, `desig_id`, `gender`, `create_data`, `modify_data`) VALUES
(1, 'dipesh', 'demoprince@gmail.com', '1234567', '1234567', 'khalid', '280000000', 1, 'M', '2015-01-31 00:00:00', '2015-03-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `semid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`id`, `studid`, `staffid`, `depid`, `semid`, `f1`, `f2`, `f3`, `f4`, `f5`, `sum`, `status`, `feed_id`, `date`) VALUES
(1, 1, 1, 3, 0, 10, 10, 10, 10, 10, 50, 0, 1, '2015-03-14'),
(2, 1, 1, 3, 0, 5, 2, 0, 8, 10, 25, 0, 3, '2015-03-21'),
(3, 1, 1, 3, 0, 6, 3, 10, 5, 6, 30, 0, 4, '2015-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`id`, `studid`, `staffid`, `depid`, `f1`, `f2`, `f3`, `f4`, `f5`, `sum`, `status`, `feed_id`, `date`) VALUES
(1, 6, 5, 3, 4, 4, 6, 5, 7, 26, 0, 16, '2015-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`id`, `studid`, `staffid`, `depid`, `f1`, `f2`, `f3`, `f4`, `f5`, `sum`, `status`, `feed_id`, `date`) VALUES
(1, 3, 3, 6, 5, 8, 7, 6, 4, 30, 0, 13, '2015-03-26'),
(2, 3, 3, 6, 5, 6, 6, 6, 6, 29, 0, 16, '2015-03-26'),
(3, 5, 3, 6, 5, 6, 7, 7, 6, 31, 0, 16, '2015-03-26'),
(4, 3, 3, 6, 1, 1, 1, 1, 1, 5, 0, 17, '2020-01-23'),
(5, 3, 3, 6, 3, 4, 1, 6, 4, 18, 0, 20, '2020-01-26'),
(6, 3, 8, 6, 2, 8, 1, 3, 5, 19, 0, 20, '2020-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feed_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`id`, `studid`, `staffid`, `depid`, `f1`, `f2`, `f3`, `f4`, `f5`, `sum`, `status`, `feed_id`, `date`) VALUES
(1, 7, 6, 6, 8, 7, 7, 7, 3, 32, 0, 16, '2015-03-26'),
(2, 8, 7, 4, 1, 2, 3, 4, 5, 15, 0, 17, '2020-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `staff_semester`
--

CREATE TABLE `staff_semester` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `semster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_semester`
--

INSERT INTO `staff_semester` (`id`, `staff_id`, `semster`) VALUES
(5, 1, 1),
(6, 1, 2),
(7, 1, 3),
(8, 2, 2),
(9, 2, 3),
(10, 3, 4),
(11, 4, 4),
(12, 5, 3),
(13, 5, 6),
(14, 6, 6),
(15, 7, 1),
(16, 7, 2),
(17, 7, 3),
(18, 7, 4),
(19, 7, 5),
(20, 7, 6),
(21, 8, 4),
(22, 8, 5),
(23, 8, 6),
(24, 9, 1),
(25, 9, 2),
(26, 9, 3),
(27, 10, 3),
(28, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `store_id`
--

CREATE TABLE `store_id` (
  `id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `cyear` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `firstname`, `lastname`, `email`, `password`, `con_pass`, `dep_id`, `cyear`, `sem`, `contact`, `gender`, `create_date`, `modify_date`) VALUES
(1, 'shubham', 'thorbole', 'thorbole@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'admin', 6, 3, 2, '8482856488', 'M', '2015-01-31 00:00:00', '2015-03-25 00:00:00'),
(2, 'Abdul', 'khan', 'demostud1@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'admin', 3, 1, 2, '8149250342', 'M', '2015-01-31 00:00:00', '2015-01-31 00:00:00'),
(3, 'rimi', 'pal', 'rimi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, 2, 4, '8482856488', 'F', '2015-03-26 00:00:00', '0000-00-00 00:00:00'),
(4, 'zaianb', 'firdos', 'z@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '12345667', 1, 3, 5, '8482856488', 'F', '2015-03-26 00:00:00', '0000-00-00 00:00:00'),
(5, 'manish', 'walde', 'manish@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, 2, 4, '8482856488', 'M', '2015-03-26 00:00:00', '0000-00-00 00:00:00'),
(7, 'shashank', 'ganvir', 'ganvir@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, 3, 6, '84821856488', 'M', '2015-03-26 00:00:00', '0000-00-00 00:00:00'),
(8, 'si', 'gupta', 'sid@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 4, 3, 6, '88', 'M', '2015-03-27 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_data`
--

CREATE TABLE `stuff_data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff_data`
--

INSERT INTO `stuff_data` (`id`, `firstname`, `lastname`, `email`, `password`, `con_pass`, `dep_id`, `subject_id`, `contact`, `gender`, `create_date`, `modify_date`) VALUES
(3, 'Rahul', 'Meshram', 'Meshram@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, '5,', '8482856488', 'M', '2015-03-25 00:00:00', '0000-00-00 00:00:00'),
(4, 'L.D', 'Vilhekar', 'Vilhekar@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 3, '3,', '8482856488', 'M', '2015-03-25 00:00:00', '0000-00-00 00:00:00'),
(5, 'Nikita', 'Katariya', 'nikita@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 3, '2,', '8482856488', 'F', '2015-03-25 00:00:00', '0000-00-00 00:00:00'),
(6, 'shurtika', 'gaikwad', 'gaikwad@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', 6, '12,', '8482856488', 'M', '2015-03-25 00:00:00', '0000-00-00 00:00:00'),
(7, 'farheen', 'akhatr', 'farhin@gmail.com', 'fc0bb62441aee60c4206529e16734a6e', 'farheen', 4, '7,9,', '82746239', 'F', '2020-01-23 00:00:00', '0000-00-00 00:00:00'),
(8, 'Ankita', 'Kale', 'anki@gmail.com', 'c8a13ae4d86707d0cb7d3654c165aa8b', 'anki123', 6, '4,5,6,7,', '1230546987', 'M', '2020-01-25 00:00:00', '0000-00-00 00:00:00'),
(9, 'harshraj', 'dhote', 'hery@gmail.com', '20dd9f144542f1f7304d0bee3cca2d43', 'harshraj', 5, '1,3,5,7,8,', '6542301987', 'M', '2020-01-25 00:00:00', '0000-00-00 00:00:00'),
(10, 'sarang ', 'takit', 'sarang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 4, '3,7,10,', '9865321246', 'M', '2020-01-25 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`) VALUES
(1, 'RDBMS'),
(2, 'linux'),
(3, 'VB'),
(4, 'Data Structure'),
(5, 'OOPS'),
(6, 'Network Security'),
(7, 'C'),
(8, 'C2'),
(9, 'Network Administation'),
(10, 'Data Communication'),
(11, 'Microprocessor'),
(12, 'java'),
(13, 'Advance java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackarea`
--
ALTER TABLE `feedbackarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_comment`
--
ALTER TABLE `hod_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_data`
--
ALTER TABLE `hod_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `init_feedback`
--
ALTER TABLE `init_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principle_data`
--
ALTER TABLE `principle_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_semester`
--
ALTER TABLE `staff_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_id`
--
ALTER TABLE `store_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuff_data`
--
ALTER TABLE `stuff_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbackarea`
--
ALTER TABLE `feedbackarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hod_comment`
--
ALTER TABLE `hod_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hod_data`
--
ALTER TABLE `hod_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `init_feedback`
--
ALTER TABLE `init_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `principle_data`
--
ALTER TABLE `principle_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sem2`
--
ALTER TABLE `sem2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem3`
--
ALTER TABLE `sem3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sem4`
--
ALTER TABLE `sem4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sem5`
--
ALTER TABLE `sem5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sem6`
--
ALTER TABLE `sem6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_semester`
--
ALTER TABLE `staff_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `store_id`
--
ALTER TABLE `store_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stuff_data`
--
ALTER TABLE `stuff_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
