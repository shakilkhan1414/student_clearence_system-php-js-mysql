-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 05:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_clearence_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(20) NOT NULL,
  `req_from` int(50) DEFAULT NULL,
  `bname` varchar(50) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `bfathersName` varchar(50) NOT NULL,
  `efathersName` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `registration` varchar(50) NOT NULL,
  `certificate_type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `sesson` varchar(50) NOT NULL,
  `examYear` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `resultDate` varchar(50) NOT NULL,
  `bankDetails` varchar(300) NOT NULL,
  `liabarian` varchar(50) DEFAULT NULL,
  `liabarian_comment` varchar(500) DEFAULT NULL,
  `liabarian_approvedBy` varchar(50) NOT NULL,
  `hall_provost` varchar(50) NOT NULL,
  `hall_provost_comment` varchar(500) DEFAULT NULL,
  `hall_provost_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_CSE` varchar(50) DEFAULT NULL,
  `lab_asistance_CSE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_CSE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_EEE` varchar(50) DEFAULT NULL,
  `lab_asistance_EEE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_EEE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_ICE` varchar(50) DEFAULT NULL,
  `lab_asistance_ICE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_ICE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_CE` varchar(50) DEFAULT NULL,
  `lab_asistance_CE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_CE_approvedBy` varchar(50) NOT NULL,
  `department_head` varchar(50) DEFAULT NULL,
  `department_head_approvedBy` varchar(50) NOT NULL,
  `finace_section` varchar(50) DEFAULT NULL,
  `finace_section_comment` varchar(500) DEFAULT NULL,
  `finace_section_approvedBy` varchar(50) NOT NULL,
  `exam_controller` varchar(20) NOT NULL,
  `exam_controller_approvedBy` varchar(20) NOT NULL,
  `lab_asistance_chemistry` varchar(20) DEFAULT NULL,
  `lab_asistance_chemistry_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_chemistry_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_physics` varchar(20) DEFAULT NULL,
  `lab_asistance_physics_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_physics_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_english` varchar(20) DEFAULT NULL,
  `lab_asistance_english_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_english_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_law` varchar(20) DEFAULT NULL,
  `lab_asistance_law_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_law_approvedBy` varchar(20) DEFAULT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `req_from`, `bname`, `ename`, `bfathersName`, `efathersName`, `address`, `phone`, `roll`, `registration`, `certificate_type`, `department`, `sesson`, `examYear`, `cgpa`, `resultDate`, `bankDetails`, `liabarian`, `liabarian_comment`, `liabarian_approvedBy`, `hall_provost`, `hall_provost_comment`, `hall_provost_approvedBy`, `lab_asistance_CSE`, `lab_asistance_CSE_comment`, `lab_asistance_CSE_approvedBy`, `lab_asistance_EEE`, `lab_asistance_EEE_comment`, `lab_asistance_EEE_approvedBy`, `lab_asistance_ICE`, `lab_asistance_ICE_comment`, `lab_asistance_ICE_approvedBy`, `lab_asistance_CE`, `lab_asistance_CE_comment`, `lab_asistance_CE_approvedBy`, `department_head`, `department_head_approvedBy`, `finace_section`, `finace_section_comment`, `finace_section_approvedBy`, `exam_controller`, `exam_controller_approvedBy`, `lab_asistance_chemistry`, `lab_asistance_chemistry_comment`, `lab_asistance_chemistry_approvedBy`, `lab_asistance_physics`, `lab_asistance_physics_comment`, `lab_asistance_physics_approvedBy`, `lab_asistance_english`, `lab_asistance_english_comment`, `lab_asistance_english_approvedBy`, `lab_asistance_law`, `lab_asistance_law_comment`, `lab_asistance_law_approvedBy`, `created_at`) VALUES
(1, 1001, 'রোহিত হাসান', 'Rohit Hasan', 'Mr Hasan', 'Mr Hasan', 'Laxmipur, Rajshahi', '01764312547', '100524', '10252412', 'certificate', 'cse', '2018', '2022', '3.50', '10-11-2022', 'Dutch Bangla Bank, 17 October, 2022', '1', NULL, '1019', '', NULL, '', '', NULL, '', '1', NULL, '1020', '', NULL, '', '1', NULL, '1022', '1', '1003', '0', 'You need to clear your payments', '', '', '', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2022-09-20'),
(2, 1004, 'Emilia Clarke', 'Emilia Clarke', 'David Clarke', 'David Clarke', 'Basundhara, Dhaka', '01752439876', '105242', '14287422', 'medium of instruction', 'eee', '2019', '2022', '3.14', '18-10-2022', 'Sonali Bank, 19-10-22', '0', '3 books need to be submitted in Library', '', '0', 'You have due in hall Bill', '', '1', NULL, '1016', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, '', '', '', '0', 'Incomplete Lab', NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2022-09-22'),
(3, 1002, 'Tony Stark', 'Tony Stark', 'Howard Stark', 'Howard Stark', 'Zero Point, Rajshahi', '01354785369', '108414', '18244545', 'certificate', 'cse', '2017', '2022', '3.81', '29-09-2022', 'Dutch Bangla Bank, 05 October, 2022', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '0', 'Failed Automation Lab', '', NULL, NULL, '', '0', 'You have uncompleted lab Geo Technical', '', '1', '1003', '0', 'Clear due in finance section', '', '', '', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2022-09-26'),
(14, 1001, 'রোহিত হাসান', 'Rohit Hasan', 'Mr Hasan', 'Mr Hasan', 'Laxmipur, Rajshahi', '0176431254', '100524', '10252412', 'medium of instruction', 'cse', '2018', '2022', '3.50', '10-11-2022', 'Dutch Bangla Bank, 17 October, 2022', '1', NULL, '1019', '1', NULL, '1015', '0', 'Failed Database Lab', '', '0', 'Electrical Machine Lab is incomplete', '', '', NULL, '', '1', NULL, '1022', '', '', '1', NULL, '1017', '', '', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2022-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `user_id` varchar(50) NOT NULL,
  `signature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatures`
--

INSERT INTO `signatures` (`user_id`, `signature`) VALUES
('1003', 'signature1.svg'),
('1015', 'elon_musk_signature.png'),
('1016', 'signature2.png'),
('1017', 'signature3.png'),
('1019', 'signature4.png'),
('1020', 'signature5.png'),
('1021', 'signature6.png'),
('1022', 'signature7.png'),
('1023', 'signature4.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `completed_credit` varchar(20) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `department`, `admission_date`, `semester`, `completed_credit`, `cgpa`, `balance`) VALUES
('1001', 'CSE', '2021-06-25', '2', '23', '3.40', '5000'),
('1002', 'CSE', '2018-01-07', '8', '90', '3.64', '0'),
('1003', 'EEE', '2020-01-18', '5', '57', '2.67', '-500'),
('1004', 'BBA', '2018-08-01-3', '8', '90', '3.75', '0'),
('1014', 'EEE', '2022-09-22', 's', 's', 's', '0'),
('1015', 'EEE', '2022-09-14', '2', '18', '3.10', '17000'),
('1016', 'EEE', '2022-09-15', '3', '32', '3.17', '2000'),
('1017', 'EEE', '2022-09-28', 's', 'a', 'a', '0'),
('1018', 'CSE', '2022-09-06', '5', '50', '3.50', '3300');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `dob`, `password`, `profile_image`, `user_role`, `created_at`) VALUES
(1001, 'Rohit Hasan', 'rohit@gmail.com', 'male', '2000-04-12', 'rohit123', 'rohit.jpg', 'student', '2022-09-21'),
(1002, 'Tony Stark', 'tony@gmail.com', 'male', '1990-12-28', 'tony123', 'tony.png', 'student', '2022-09-19'),
(1003, 'Elon Musk', 'elon@gmail.com', 'male', '2002-07-05', 'elon123', 'elon.jpg', 'department_head', '2022-09-17'),
(1004, 'Emilia Clarke', 'emilia@yahoo.com', 'female', '2001-01-17', 'emilia123', 'emilia.jpg', 'student', '2022-09-23'),
(1015, 'Tim David', 'david@gmail.com', 'male', '2022-09-01', 'david123', '1664117174158609785_486680635824569_2812323689388482491_n.jpg', 'hall_provost', '2022-09-25'),
(1016, 'George David', 'georgedavid@gmail.com', 'male', '2022-09-08', '2016013@', '1664117247158609785_486680635824569_2812323689388482491_n.jpg', 'lab_asistance_CSE', '2022-09-25'),
(1017, 'Mr Rahim', 'rahim@gmail.com', 'male', '2022-09-01', 'rahim123', '1664289228302435386_2250136205156028_4352972352277270401_n.jpg', 'finace_section', '2022-09-27'),
(1019, 'Kajal Rahman', 'kajal@gmail.com', 'Female', '2000-01-13', 'kajal123', 'emilia.jpg', 'liabarian', '2022-09-29'),
(1020, 'Shakib Al Hasan', 'sakib@gmail.com', 'male', '1990-05-18', 'sakib123', 'shakib-al-hasan.jpg', 'lab_asistance_EEE', '2022-09-15'),
(1021, 'Liam Livingstone', 'liam@gmail.com', 'male', '1995-03-25', 'liam123', 'liam.png', 'lab_asistance_ICE', '2022-09-26'),
(1022, 'Isaac Newton', 'newton@gmail.com', 'male', '1970-10-23', 'newton123', 'sir-isaac-newton.jpg', 'lab_asistance_CE', '2022-09-27'),
(1023, 'Tamin Khan', 'tamim@gmail.com', 'male', '1995-01-13', 'tamim123', 'tony.png', 'exam_controller', '2022-09-14'),
(1024, 'Naeem Hasan', 'naeem@gmail.com', 'male', '1990-05-20', 'naeem123', 'liam.png', 'lab_asistance_chemistry', '2022-09-27'),
(1025, 'Ritu Hasan', 'ritu@gmail.com', 'female', '1990-05-25', 'ritu123', 'emilia.jpg', 'lab_asistance_physics', '2022-09-28'),
(1026, 'Asif Mondol', 'asif@gmail.com', 'male', '2001-01-17', 'asif123', 'tony.png', 'lab_asistance_english', '2022-09-27'),
(1027, 'Joy Hasan', 'joy@gmail.com', 'male', '1990-05-25', 'joy123', 'sir-isaac-newton.jpg', 'lab_asistance_law', '2022-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
