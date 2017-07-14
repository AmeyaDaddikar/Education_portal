-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 12:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educational_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `clg_id` int(11) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `hostel_capacity` int(11) DEFAULT NULL,
  `website` varchar(512) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`, `addr`, `hostel_capacity`, `website`, `contact`) VALUES
(10001, 'Veermata Jijabai Technological Institute', 'H R Mahajani Marg, Matunga, Mumbai - 400 019, Mumbai City, Maharashtra', 1000, 'www.vjti.ac.in', '022 2419 8100'),
(10002, 'College Of Engineering, Pune', 'Wellesly Road, Shivajinagar, Pune,Pune,Maharashtra', 600, 'www.coep.org.in', '+91-20-25507000'),
(10003, 'Bharatiya Vidya Bhavan\'s Sardar Patel Institute Of Technology', 'Bhavan\'s Campus, Munshi Nagar, Andher West Mumbai,Mumbai City,Maharashtra', 500, 'www.spit.ac.in', '91-022-26707440'),
(10004, 'Institute Of Chemical Technology', 'Nathalal Parekh Marg, Matunga,Mumbai City,Maharashtra', 450, 'www.ictmumbai.edu.in', '91-22-33611111'),
(10005, 'Padmashree Dr D.Y. Patil Institute Of Pharmaceutical Sciences And Research', 'Sant Tukaram Nagar, Opp Hindustan Antibiotics, Pimpri, PUNE.411018,PUNE,Maharashtra', 670, 'www.pharmacy.dypvp.edu.in', '+91 20 65305999'),
(10006, 'Maharashtra Institute Of Technology, Pune', 'Survey No. 124, Paud Road, Kothrud, Pune,Pune,Maharashtra', 550, 'www.mitpune.com', '+91-20-30273400'),
(10007, 'L.D. College Of Engineering', 'Near Gujarat University, Navrangpura, Ahmedabad- 380015,Ahmedabad,Gujarat', 450, 'www.ldce.ac.in', ' 079 2630 2887'),
(10008, 'Adani Institute Of Infrastructure Engineering', 'Shantigram Township, Near Vaishnodevi Circle, SG Highway,Ahmedabad,Gujarat', NULL, 'www.aiie.ac.in', '+91 79 25556153'),
(10009, 'NIE Institute Of Technology', 'Survey No 50(Part),Koorgalli Village,Hootagalli Industrial Area Kasaba Hobli,Mysore-570018,Mysore,Karnataka', 430, 'www.nieit.ac.in', '2403735'),
(10010, 'Mysore College Of Engineering And Management', 'Chikahalli, Varuna Hobali, Near Big Banyan Tree, TN Road,Mysore,Karnataka', 475, NULL, '0821 - 2971173 '),
(10011, 'Netaji Subhas Institute Of Technology', 'Azad Hind Fauj Marg, Sector-3, Dwarka New Delhi-110078,South West Delhi,Delhi', 510, 'www.nsit.ac.in', NULL),
(10012, 'Indraprastha Institute of Information Technology', 'Indraprastha Institute of Information Technology, Delhi\r\nOkhla Industrial Estate,Phase III\r\n(Near Govind Puri Metro Station)\r\nNew Delhi, India - 110020', 375, 'www.iiitd.ac.in', '011 2690 7400');

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

CREATE TABLE `college_course` (
  `clg_id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`clg_id`, `course_id`) VALUES
(10007, 'ATE-101'),
(10004, 'BCE-1000'),
(10005, 'BP-1000'),
(10001, 'CE-1001'),
(10008, 'CIE-1001'),
(10009, 'CS-100'),
(10001, 'CS-1001'),
(10012, 'CSAM-100'),
(10002, 'CSE-1000'),
(10011, 'EC-1000'),
(10010, 'EC-101'),
(10007, 'ECE-101'),
(10002, 'EEE-1001'),
(10006, 'ETE-101'),
(10008, 'ICT-1001'),
(10011, 'IN-1000'),
(10009, 'IP-100'),
(10010, 'ISE-101'),
(10001, 'IT-1001'),
(10012, 'ITSS-100'),
(10006, 'MCE-101'),
(10001, 'ME-1001');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `num_sem` tinyint(4) DEFAULT NULL,
  `syllabus` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `num_sem`, `syllabus`) VALUES
('ATE-101', 'Automobile Engineering', 8, NULL),
('BCE-1000', 'Bachelor of Chemical Engineering', 8, NULL),
('BP-1000', 'Bachelor Of Pharmacy', NULL, NULL),
('CE-1001', 'Civil Engineering', 8, NULL),
('CIE-1001', 'Civil And Infrastructure Engineering', NULL, NULL),
('CS-100', 'Computer Science Engineering', NULL, NULL),
('CS-1001', 'Computer Engineering', 8, NULL),
('CSAM-100', 'Computer Science And Applied Mathematics', NULL, NULL),
('CSE-1000', 'Computer Science And Engineering', 8, NULL),
('EC-1000', 'Electronics And Communication', NULL, NULL),
('EC-101', 'Electronics And Communication Engineering', NULL, NULL),
('ECE-101', 'Electronics And Communication Engineering', 8, NULL),
('EEE-1001', 'Electrical And Electronics Engineering', 8, NULL),
('ETE-101', 'Electronics And Telecommunication Engineering', NULL, NULL),
('ICT-1001', 'Information And Communication Technology', NULL, NULL),
('IN-1000', 'Instrumentation And Control', NULL, NULL),
('IP-100', 'Industrial Production Engineering', NULL, NULL),
('ISE-101', 'Information Science And Engineering', NULL, NULL),
('IT-1001', 'Information Technology', NULL, NULL),
('ITSS-100', 'Information Technology And Social Sciences', NULL, NULL),
('MCE-101', 'Mechanical Engineering', 8, NULL),
('ME-1001', 'Mechanical Engineering', 8, NULL);

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
(7001, 'MH-CET', '2017-05-11', 3, 'https://www.dtemaharashtra.gov.in/mhtcet2017/StaticPages/DTEHome.html'),
(7002, 'JEE Main', '2017-04-02', 3, 'www.jeemain.nic.in'),
(7003, 'GujCET', '2017-05-10', 3, NULL),
(8004, 'Karnataka CET', '2017-05-02', 3, 'http://kea.kar.nic.in/cet_2017.htm');

-- --------------------------------------------------------

--
-- Table structure for table `exam_college`
--

CREATE TABLE `exam_college` (
  `exam_id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `course_id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_college`
--

INSERT INTO `exam_college` (`exam_id`, `clg_id`, `course_id`) VALUES
(7001, 10001, NULL),
(7001, 10002, NULL),
(7001, 10003, NULL),
(7001, 10005, NULL),
(7001, 10006, NULL),
(7002, 10004, NULL),
(7002, 10011, NULL),
(7002, 10012, NULL),
(7003, 10007, NULL),
(7003, 10008, NULL),
(8004, 10009, NULL),
(8004, 10010, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `rgn_id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`rgn_id`, `state`, `district`) VALUES
(1001, 'Maharashtra', 'Mumbai City'),
(1002, 'Maharashtra', 'Pune'),
(1003, 'Gujarat', 'Ahmedabad'),
(1004, 'Karnataka', 'Mysore'),
(1005, 'Delhi', 'North West Delhi'),
(1006, 'Delhi', 'South West Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `region_college_univ`
--

CREATE TABLE `region_college_univ` (
  `rgn_id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `univ_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region_college_univ`
--

INSERT INTO `region_college_univ` (`rgn_id`, `clg_id`, `univ_id`) VALUES
(1001, 10001, 1001),
(1001, 10003, 1001),
(1001, 10004, 1005),
(1002, 10002, 1006),
(1002, 10005, 1006),
(1002, 10006, 1006),
(1003, 10007, 1003),
(1003, 10008, 1003),
(1004, 10009, 1004),
(1004, 10010, 1004),
(1005, 10012, 1002),
(1006, 10011, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `univ`
--

CREATE TABLE `univ` (
  `univ_id` int(11) NOT NULL,
  `univ_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `univ`
--

INSERT INTO `univ` (`univ_id`, `univ_name`) VALUES
(1001, 'Mumbai University'),
(1002, 'Delhi University'),
(1003, 'Gujarat Technological University'),
(1004, 'Visvesvaraya Technological University'),
(1005, 'Deemed University'),
(1006, 'Savitribai Phule Pune University');

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
  ADD KEY `clg_id` (`clg_id`,`course_id`),
  ADD KEY `Course` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_id` (`course_id`,`course_name`);

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
-- Indexes for table `exam_college`
--
ALTER TABLE `exam_college`
  ADD PRIMARY KEY (`exam_id`,`clg_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `clg_id` (`clg_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`rgn_id`),
  ADD KEY `rgn_id` (`rgn_id`);

--
-- Indexes for table `region_college_univ`
--
ALTER TABLE `region_college_univ`
  ADD PRIMARY KEY (`rgn_id`,`clg_id`,`univ_id`),
  ADD KEY `rgn_id` (`rgn_id`),
  ADD KEY `clg_id` (`clg_id`),
  ADD KEY `univ_id` (`univ_id`);

--
-- Indexes for table `univ`
--
ALTER TABLE `univ`
  ADD PRIMARY KEY (`univ_id`),
  ADD KEY `univ_id` (`univ_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_course`
--
ALTER TABLE `college_course`
  ADD CONSTRAINT `College Course` FOREIGN KEY (`clg_id`) REFERENCES `college` (`clg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_college`
--
ALTER TABLE `exam_college`
  ADD CONSTRAINT `College` FOREIGN KEY (`clg_id`) REFERENCES `college` (`clg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Exam` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `region_college_univ`
--
ALTER TABLE `region_college_univ`
  ADD CONSTRAINT `College Region constraint` FOREIGN KEY (`clg_id`) REFERENCES `college` (`clg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Region constraint` FOREIGN KEY (`rgn_id`) REFERENCES `region` (`rgn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `University constraint` FOREIGN KEY (`univ_id`) REFERENCES `univ` (`univ_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
