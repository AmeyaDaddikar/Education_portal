-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 02:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `clg_id` int(11) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `hostel_capacity` int(11) DEFAULT NULL,
  `website` varchar(512) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`, `addr`, `univ`, `hostel_capacity`, `website`, `contact`) VALUES
(10001, 'Veermata Jijabai Technological Institute', 'Matunga, Mumbai - 400019', 'Autonomous', 1000, 'www.google.co.in', '0123456789'),
(10002, 'COEP', 'Pune, Maharashtra', 'Pune University', 1000, 'www.yahoo.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

CREATE TABLE `college_course` (
  `clg_id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `intake` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`clg_id`, `course_id`, `intake`) VALUES
(10001, 'CS-1001', 60),
(10002, 'CS-100', 120);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `num_sem` tinyint(4) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `syl` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `num_sem`, `univ`, `syl`) VALUES
('CS-100', 'Computer Science Engineering', 8, 'Pune University', NULL),
('CS-1001', 'Computer Engineering', 8, 'VJTI Autonomous', NULL),
('CS-101', 'Computer Engineering', 8, 'Mumbai University', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` varchar(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `website` varchar(512) DEFAULT NULL,
  `description` tinyblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `start_date`, `end_date`, `website`, `description`) VALUES
('WD1001', 'Database Administration Workshop', '2017-05-27', '2017-05-28', NULL, 0x53686f7274204465736372697074696f6e204f6620746865206576656e74202d20436f6d65206c6561726e2074686520736369656e636520616e6420617274206f662064617461626173652061646d696e697374726174696f6e20647572696e672074686520636f6d696e67207765656b656e64);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `website` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `date`, `duration`, `website`) VALUES
(7001, 'MH-CET', '2016-05-05', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_course`
--

CREATE TABLE `exam_course` (
  `exam_id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_course`
--

INSERT INTO `exam_course` (`exam_id`, `course_id`) VALUES
(7001, 'CS-100'),
(7001, 'CS-1001'),
(7001, 'CS-101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`clg_id`),
  ADD KEY `clg_id` (`clg_id`);

--
-- Indexes for table `college_course`
--
ALTER TABLE `college_course`
  ADD PRIMARY KEY (`clg_id`,`course_id`),
  ADD KEY `clg_id` (`clg_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `univ` (`univ`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `exam_course`
--
ALTER TABLE `exam_course`
  ADD PRIMARY KEY (`exam_id`,`course_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_course`
--
ALTER TABLE `college_course`
  ADD CONSTRAINT `College constraint` FOREIGN KEY (`clg_id`) REFERENCES `college` (`clg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course constraint` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_course`
--
ALTER TABLE `exam_course`
  ADD CONSTRAINT `Course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Exam` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
