-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 04:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `fname`, `lname`) VALUES
(2, 'admin', '$2y$10$DwCyFmmgDL8NFAIT.jN1Qu96BOJLVDds2.YO14IAvC2iE2znx28A2', 'Hammasii', 'Teshome');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `grade`, `section`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `grade_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade`, `grade_code`) VALUES
(1, '9', 'G9'),
(2, '10', 'G10'),
(3, '11', 'G11'),
(4, '12', 'G12');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `sender_full_name` varchar(100) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_full_name`, `sender_email`, `message`, `date_time`) VALUES
(1, 'hammasii Teshome', 'haphamu151@gmail.com', 'Great', '2023-03-08 10:02:11'),
(2, 'hammasii Teshome', 'haphamu151@gmail.com', 'hello', '2023-03-08 10:44:19'),
(3, 'hammasii Teshome', 'haphamu151@gmail.com', 'huj', '2023-03-08 10:49:32'),
(4, 'hammasii', 'morodaz@yahoo.com', 'hey ', '2023-03-08 10:53:05'),
(5, 'Feven Tigabu', 'feventigabu76@gmail.com', 'its nice. keep it up', '2023-03-08 21:54:48'),
(6, 'Efrata Hbtom', 'efratahaf2@gmail.com', 'Afer blu', '2023-03-08 22:17:35'),
(7, 'frezewd Mengistu', 'frezwdmngstu@gmail,com', 'its very good very very good', '2023-03-09 10:29:27'),
(8, 'teshome bula', 'teshomebula@gmail.com', 'ok feedback', '2023-03-12 15:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_office`
--

CREATE TABLE `registrar_office` (
  `r_user_id` int(11) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(31) NOT NULL,
  `lname` varchar(31) NOT NULL,
  `address` varchar(31) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(31) NOT NULL,
  `qualification` varchar(31) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_joined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_office`
--

INSERT INTO `registrar_office` (`r_user_id`, `username`, `password`, `fname`, `lname`, `address`, `employee_number`, `date_of_birth`, `phone_number`, `qualification`, `gender`, `email_address`, `date_of_joined`) VALUES
(3, 'teshome', '$2y$10$Y8zPGEUiN9a4lfJXyypC6ez4lncoV5WNq5EBKyHMCV/KbAKHWLkDi', 'Teshome', 'Bula', 'Addis Ababa', 23, '2001-09-23', '0978563412', 'PHD', 'Female', 'teshome@gmail.com', '2023-03-07 21:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(6, 'D'),
(7, 'e');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `current_year` int(11) NOT NULL,
  `current_semester` varchar(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `slogan` varchar(300) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `current_year`, `current_semester`, `school_name`, `slogan`, `about`) VALUES
(1, 2023, 'II', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `address` varchar(31) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_joined` datetime NOT NULL DEFAULT current_timestamp(),
  `parent_fname` varchar(127) NOT NULL,
  `parent_lname` varchar(127) NOT NULL,
  `parent_phone_number` varchar(31) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `fname`, `lname`, `grade`, `section`, `address`, `gender`, `email_address`, `date_of_birth`, `date_of_joined`, `parent_fname`, `parent_lname`, `parent_phone_number`, `image`) VALUES
(2, 'efrata', '$2y$10$JCUtpuMtlmwaQnhxEMox7ukKQQqvyEkqjoDPJH9IEFfEtLa5XFo0m', 'Efrata', 'Habtom', 1, 1, '', '', '', NULL, '2023-03-07 13:09:32', '', '', '', ''),
(3, 'kal', '$2y$10$LjprnlhV7s5yQlpth8cFQ.ECpjFunr9YVhYQrUPrOqMnqfnXf0WCm', 'Kalkidan', 'Yohannes', 1, 1, 'Addis Ababa', 'Female', 'haphamu151@gmail.com', '2002-05-31', '2023-03-07 13:12:18', 'Yohannes', 'Abate', '0912546789', ''),
(4, 'feven', '$2y$10$cXtREMjthPjKjJ6O/oGhi.4byo40MgM45asVKA9QlbhGcdea.E.di', 'Feven', 'Tigabu', 2, 1, 'Addis Ababa', 'Female', 'feven@gmail.com', '2002-06-23', '2023-03-08 00:04:26', 'Tigabu', 'Haile', '0998765567', ''),
(6, 'fre', '$2y$10$GEo7l2urN2Knv5y3tMWc1u97JRIGiq903MyAoyl3uCpye/PQciPSe', 'frezewd', 'Mengistu', 1, 2, 'AA', 'Female', 'frezewd345@gmail.com', '0000-00-00', '2023-03-09 09:00:05', 'Mengistu', 'yemengistuabat', '0976544455', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_score`
--

CREATE TABLE `student_score` (
  `id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `results` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_score`
--

INSERT INTO `student_score` (`id`, `semester`, `year`, `student_id`, `teacher_id`, `subject_id`, `results`) VALUES
(1, 'II', 2023, 2, 6, 1, '10 10,5 10,7 10,5 10,30 50'),
(2, 'II', 2023, 2, 6, 4, '10 10,2 10,10 10,5 10,45 50'),
(3, 'II', 2022, 2, 6, 4, '10 10,2 10,10 10,5 10,45 50'),
(4, 'II', 2023, 3, 6, 1, '10 10,5 5,20 20,18 20,42 45'),
(5, 'II', 2023, 6, 6, 1, '5 10,13 15,2 5,15 20,7 50');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject`, `subject_code`, `grade`) VALUES
(1, 'English', 'ENGL10', 1),
(2, 'Physics', 'Phy', 2),
(3, 'Mathematics', 'Math', 1),
(4, 'Biology', 'Bio', 3),
(5, 'Chemistry', 'Chem', 4),
(6, 'Amharic', 'Amh', 2),
(7, 'Civics ', 'Civ', 4),
(8, 'Technical Drawing', 'TD12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `class` varchar(31) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `subjects` varchar(35) NOT NULL,
  `grades` varchar(35) NOT NULL,
  `section` varchar(31) NOT NULL,
  `address` varchar(31) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(31) NOT NULL,
  `qualification` varchar(127) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_joined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `username`, `password`, `class`, `fname`, `lname`, `subjects`, `grades`, `section`, `address`, `employee_number`, `date_of_birth`, `phone_number`, `qualification`, `gender`, `email_address`, `date_of_joined`) VALUES
(4, 'samuel', '$2y$10$hEOc5ur8neiRTzSHqkM4ee/E793vZ/vrisO3vTCVD1tz0Vlpqxxwi', '1', 'Samuel', 'Alemu', '23', '3', '2', 'A.A', 23, '2023-03-24', '0987654321', 'PHD', 'Male', 'morodazi@yahoo.com', '2023-03-07 13:04:49'),
(6, 'kal', '$2y$10$ljY/jcM8ffCF7zNEwvAPNebo5v02PTPLr4F.kOJi7iYjUUEbzLLeu', '124', 'Kalkidan', 'Alemu', '12', '', '', 'Bishoftu', 4, '2009-05-06', '0978563419', 'PHD', 'Female', 'teshome@gmail.com', '2023-03-07 23:25:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `registrar_office`
--
ALTER TABLE `registrar_office`
  ADD PRIMARY KEY (`r_user_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_score`
--
ALTER TABLE `student_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrar_office`
--
ALTER TABLE `registrar_office`
  MODIFY `r_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_score`
--
ALTER TABLE `student_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
