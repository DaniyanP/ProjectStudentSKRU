-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:15 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectstudenv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `appoint_id` int(255) NOT NULL,
  `project_id` int(15) NOT NULL,
  `appoint_date_start` datetime NOT NULL,
  `appoint_date_end` datetime NOT NULL,
  `apooint_minute` int(3) NOT NULL,
  `appoint_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(15) NOT NULL,
  `appoint_status` int(2) NOT NULL,
  `recorder` int(15) NOT NULL,
  `appoint_recorder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`appoint_id`, `project_id`, `appoint_date_start`, `appoint_date_end`, `apooint_minute`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`, `appoint_recorder`) VALUES
(3, 2222, '2021-01-13 14:57:00', '2021-01-13 18:03:00', 0, 'dfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 1, 3, 11221, '2021-01-22 14:57:30'),
(4, 1111, '2021-01-29 19:59:00', '2021-01-29 19:05:00', 0, 'sdsdsd', 1, 4, 11221, '2021-01-22 14:59:09'),
(5, 2222, '2021-01-13 14:57:00', '2021-01-13 18:03:00', 0, 'dfdfdfdfdfddfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdffdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 1, 2, 11221, '2021-01-22 14:57:30'),
(6, 2222, '2021-01-22 22:46:00', '2021-01-22 23:46:00', 0, 'กก\r\nกก\r\nหกกห\r\nหกหก\r\n', 1, 3, 11221, '2021-01-22 18:46:51'),
(7, 2222, '2021-01-23 22:00:00', '2021-01-23 22:30:00', 0, '2222', 1, 3, 11221, '2021-01-23 19:38:29'),
(8, 2222, '2021-01-23 22:00:00', '2021-01-23 22:10:00', 0, '222', 1, 3, 11221, '2021-01-23 19:40:50'),
(9, 2222, '2021-01-14 14:50:00', '2021-01-14 15:00:00', 0, 'rrwrwrwrwrrw', 1, 3, 11221, '2021-01-23 19:45:54'),
(10, 2222, '2021-01-30 12:50:00', '2021-01-30 13:00:00', 0, 'wewewewe', 2, 2, 11221, '2021-01-23 19:47:31'),
(11, 2222, '2021-01-29 02:25:00', '2021-01-29 03:24:00', 59, 'xxxxxxxxxxxxx', 2, 2, 11221, '2021-01-24 08:14:19'),
(12, 2222, '2021-01-09 04:54:00', '2021-01-09 05:00:00', 8, 'Oooooo', 1, 1, 11221, '2021-01-24 10:36:35'),
(13, 2222, '2021-01-29 19:02:00', '2021-01-29 19:22:00', 20, 'หหดหดหด', 1, 1, 11221, '2021-01-24 15:57:34'),
(14, 2222, '2021-01-29 19:02:00', '2021-01-29 19:22:00', 20, 'หหดหดหด', 1, 2, 11221, '2021-01-24 15:57:34'),
(15, 59033031, '2021-01-28 19:30:00', '2021-01-28 20:29:00', 59, 'หหหหหห', 2, 4, 594235001, '2021-01-24 20:30:35'),
(16, 59033031, '2021-01-16 22:20:00', '2021-01-16 22:50:00', 20, 'ok', 2, 5, 594235001, '2021-01-25 21:06:43'),
(17, 2222, '2021-01-24 14:52:00', '2021-01-24 15:00:00', 8, 'Oooooo', 1, 3, 11221, '2021-01-24 10:36:35'),
(18, 2222, '2021-01-24 14:52:00', '2021-01-24 15:00:00', 8, 'Oooooo', 1, 2, 11221, '2021-01-24 10:36:35'),
(19, 2222, '2021-01-24 14:52:00', '2021-01-24 15:12:00', 8, 'Oooooo', 1, 4, 11221, '2021-01-24 10:36:35'),
(20, 59033031, '2021-01-30 09:30:00', '2021-01-30 10:00:00', 15, 'zszszszss', 2, 4, 594235001, '2021-01-29 10:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `appoint_status`
--

CREATE TABLE `appoint_status` (
  `appoint_status_id` int(2) NOT NULL,
  `appoint_status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appoint_status_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_calendar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoint_status`
--

INSERT INTO `appoint_status` (`appoint_status_id`, `appoint_status_name`, `appoint_status_class`, `color_calendar`) VALUES
(1, 'รอยืนยัน', 'warning text-dark', 'Orange'),
(2, 'ยืนยัน', 'primary', 'Blue'),
(3, 'ยกเลิก', 'danger', 'Orange'),
(4, 'เสร็จสิ้น', 'success', 'Green'),
(5, 'เปลี่ยน', 'info', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `com05`
--

CREATE TABLE `com05` (
  `com05_id` int(255) NOT NULL,
  `appoint_id` int(255) NOT NULL,
  `project_id` int(15) NOT NULL,
  `comment_teacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_assign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `meet_check` int(2) NOT NULL,
  `teacher_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `com05`
--

INSERT INTO `com05` (`com05_id`, `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`) VALUES
(1, 3, 2222, 'comment_teacher	varchar(255)', 'comment_assign	varchar(255)', 2, 1, 1),
(2, 3, 2222, 'comment_teacher	varchar(255) comment_teacher	varchar(255)comment_teacher	varchar(255)', 'comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255)', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `filee`
--

CREATE TABLE `filee` (
  `file_id` int(255) NOT NULL,
  `project_id` int(255) NOT NULL,
  `file_type` int(255) NOT NULL,
  `file_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `filee`
--

INSERT INTO `filee` (`file_id`, `project_id`, `file_type`, `file_link`) VALUES
(7, 2222, 3, 'https://www.google.com/'),
(11, 2222, 1, 'https://www.google.com/'),
(13, 59033031, 3, 'https://i.ibb.co/1fcKRpT/594235033001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `file_type_id` int(11) NOT NULL,
  `file_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_type`
--

INSERT INTO `file_type` (`file_type_id`, `file_type_name`, `file_type_icon`) VALUES
(1, 'COM-01', 'far fa-star'),
(3, 'COM-04', 'far fa-paper-plane');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `student_major_id` int(2) NOT NULL,
  `student_major_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`student_major_id`, `student_major_name`) VALUES
(1, 'it'),
(2, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `meet_check`
--

CREATE TABLE `meet_check` (
  `meet_check_id` int(2) NOT NULL,
  `meet_check_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meet_check`
--

INSERT INTO `meet_check` (`meet_check_id`, `meet_check_name`) VALUES
(1, 'มาตามนัด'),
(2, 'มาสาย'),
(3, 'ไม่มาตามนัด');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_student`
--

CREATE TABLE `notifications_student` (
  `notifications_id` int(11) NOT NULL,
  `notifications_sender` int(11) NOT NULL,
  `notifications_recipient` int(11) NOT NULL,
  `notifications_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifications_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_teacher`
--

CREATE TABLE `notifications_teacher` (
  `notifications_id` int(255) NOT NULL,
  `notifications_sender` int(15) NOT NULL,
  `notifications_project` int(15) NOT NULL,
  `notifications_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifications_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(15) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_type` int(2) NOT NULL,
  `project_adviser1` int(15) NOT NULL,
  `project_adviser2` int(15) NOT NULL,
  `project_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_type`, `project_adviser1`, `project_adviser2`, `project_status`) VALUES
(1111, 'dddddddddddddddddddd dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 2, 1, 2, 1),
(2222, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 2, 1, 2, 1),
(59033031, 'ระบบค้นหาช่างภาพ', 1, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `project_status_id` int(2) NOT NULL,
  `project_status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_status_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`project_status_id`, `project_status_name`, `project_status_class`) VALUES
(1, 'ดำาเนินการ', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `project_type_id` int(2) NOT NULL,
  `project_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`project_type_id`, `project_type_name`) VALUES
(1, 'ระบบ'),
(2, 'วิจัย'),
(3, 'อเนมิชั่น'),
(4, 'IOT');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `score_score` int(3) NOT NULL,
  `score_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `score_score`, `score_detail`) VALUES
(1, 1, 'aaa'),
(2, 2, 'aalla'),
(3, 3, 'aasdsda'),
(4, 4, 'asdsdaa'),
(5, 5, 'aasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(15) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_major` int(2) NOT NULL,
  `student_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_project` int(15) NOT NULL,
  `student_type` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_major`, `student_phone`, `student_email`, `student_password`, `student_photo`, `student_project`, `student_type`) VALUES
(12, '', 1, '1414141', '594235052@parichat.skru.ac.th', '', 'student_photo', 1111, 'A'),
(59, 'ดานิยาน  พร้อมมูล', 1, '0821414145', '594235008@hhhh.ccc', '08f8e0260c64418510cefb2b06eee5cd', '', 2222, 'A'),
(1111, 'somsak lettakun', 1, '74747474', '594235008@parichat.skru.ac.th', 'aaa', 'student_photo', 1111, 'A'),
(9999, 'อาจารย์ที่ปรึกษาโครงงาน', 1, '11111111', '1sss@ddd', 'c8c605999f3d8352d7bb792cf3fdb25b', 'student_photo', 1111, 'A'),
(11221, 'somsak lettakun', 1, '44144qq', '59000@parichat.skru.ac.thqq', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 2222, 'A'),
(594235001, 'กชกร จ่าวิสูตร', 1, '0811555532', '594235001@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/ZJHGHvx/594235001.jpg', 59033031, 'A'),
(594235008, 'ดานิยาน พร้อมมูล', 1, '0869624129', '594235008@parichat.skru.ac.th', 'b0baee9d279d34fa1dfd71aadb908c3f', 'https://i.ibb.co/HFB65Yz/asa.png', 2222, 'A'),
(594235033, 'สุพิชญา  เส้งหวัด', 1, '081154417117', '594235033@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/1fcKRpT/594235033001.jpg', 59033031, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `names` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `names`, `descriptionf`, `email`, `date`) VALUES
(1, 'ddddd', 'B', 'C', '2021-01-24 08:21:35'),
(2, 'ddddd', 'student', 'dadad@wdwd.com', '2021-01-24 08:22:10'),
(3, 'ddddd', 'พร้อมมูล', 'ww@el', '2021-01-24 08:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(255) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_type` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_photo`, `teacher_type`) VALUES
(1, 'ผศ.ดินาถ หลำสุบ', 'bbbbbb', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(2, 'ผศ.นลินี อินทมะโน', 'bbbbbb', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(3, 'ไม่มีอาจารย์ที่ปรึกษาร่วม', 'bbbbbb', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `recorder` (`recorder`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `appoint_status` (`appoint_status`);

--
-- Indexes for table `appoint_status`
--
ALTER TABLE `appoint_status`
  ADD PRIMARY KEY (`appoint_status_id`);

--
-- Indexes for table `com05`
--
ALTER TABLE `com05`
  ADD PRIMARY KEY (`com05_id`),
  ADD KEY `appoint_id` (`appoint_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `score` (`score`),
  ADD KEY `meet_check` (`meet_check`);

--
-- Indexes for table `filee`
--
ALTER TABLE `filee`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `file_type` (`file_type`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD PRIMARY KEY (`file_type_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`student_major_id`);

--
-- Indexes for table `meet_check`
--
ALTER TABLE `meet_check`
  ADD PRIMARY KEY (`meet_check_id`);

--
-- Indexes for table `notifications_student`
--
ALTER TABLE `notifications_student`
  ADD PRIMARY KEY (`notifications_id`),
  ADD KEY `notifications_sender` (`notifications_sender`),
  ADD KEY `notifications_recipient` (`notifications_recipient`);

--
-- Indexes for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  ADD PRIMARY KEY (`notifications_id`),
  ADD KEY `notifications_project` (`notifications_project`),
  ADD KEY `notifications_sender` (`notifications_sender`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_type` (`project_type`),
  ADD KEY `project_status` (`project_status`),
  ADD KEY `project_adviser1` (`project_adviser1`),
  ADD KEY `project_adviser2` (`project_adviser2`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`project_status_id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`project_type_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_major` (`student_major`),
  ADD KEY `student_project` (`student_project`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `appoint_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `com05`
--
ALTER TABLE `com05`
  MODIFY `com05_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `filee`
--
ALTER TABLE `filee`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications_student`
--
ALTER TABLE `notifications_student`
  MODIFY `notifications_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  MODIFY `notifications_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoint`
--
ALTER TABLE `appoint`
  ADD CONSTRAINT `appoint_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `appoint_ibfk_2` FOREIGN KEY (`recorder`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `appoint_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `appoint_ibfk_4` FOREIGN KEY (`appoint_status`) REFERENCES `appoint_status` (`appoint_status_id`);

--
-- Constraints for table `com05`
--
ALTER TABLE `com05`
  ADD CONSTRAINT `com05_ibfk_1` FOREIGN KEY (`appoint_id`) REFERENCES `appoint` (`appoint_id`),
  ADD CONSTRAINT `com05_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `com05_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `com05_ibfk_4` FOREIGN KEY (`score`) REFERENCES `score` (`score_id`),
  ADD CONSTRAINT `com05_ibfk_5` FOREIGN KEY (`meet_check`) REFERENCES `meet_check` (`meet_check_id`);

--
-- Constraints for table `filee`
--
ALTER TABLE `filee`
  ADD CONSTRAINT `filee_ibfk_1` FOREIGN KEY (`file_type`) REFERENCES `file_type` (`file_type_id`),
  ADD CONSTRAINT `filee_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `notifications_student`
--
ALTER TABLE `notifications_student`
  ADD CONSTRAINT `notifications_student_ibfk_1` FOREIGN KEY (`notifications_sender`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `notifications_student_ibfk_2` FOREIGN KEY (`notifications_recipient`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  ADD CONSTRAINT `notifications_teacher_ibfk_1` FOREIGN KEY (`notifications_project`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `notifications_teacher_ibfk_2` FOREIGN KEY (`notifications_sender`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`project_type`) REFERENCES `project_type` (`project_type_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`project_status`) REFERENCES `project_status` (`project_status_id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`project_adviser1`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`project_adviser2`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_major`) REFERENCES `major` (`student_major_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`student_project`) REFERENCES `project` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
