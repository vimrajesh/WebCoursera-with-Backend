-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 01:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcoursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(64) NOT NULL,
  `course_description` varchar(4096) NOT NULL,
  `course_tasks` int(11) NOT NULL,
  `course_faculty_id` int(11) NOT NULL,
  `url` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_tasks`, `course_faculty_id`, `url`, `image`) VALUES
(1, 'HTML', 'Basic Introductory Course to the widely used Hyper Text Markup Language (HTML).', 12, 1, '/webcoursera/courses/html_course.php', '/webcoursera/assets/images/HTML.png'),
(2, 'CSS', 'Advanced Online CSS training for beginners.', 12, 1, '/webcoursera/courses/css_course.php', '/webcoursera/assets/images/CSS.png'),
(3, 'Python', 'Go from Beginner to Advanced in python programming by learning all the basics to OOPs.', 12, 1, '/webcoursera/courses/python_course.php', '/webcoursera/assets/images/PYTHON.png'),
(4, 'Javascript', 'Learn Javascript form beginner to advanced.', 12, 1, '/webcoursera/courses/javascript_course.php', '/webcoursera/assets/images/JAVASCRIPT.png'),
(5, 'AJAX', 'Learn JQuery to create stunning animations, provide fast feedback forms, handle all user events and perform Ajax calls.\r\n', 12, 1, '/webcoursera/courses/ajax_course.php', '/webcoursera/assets/images/AJAX.png'),
(6, 'Java', 'Complete guide to learning how to program in Java.', 12, 1, '/webcoursera/courses/java_course.php', '/webcoursera/assets/images/JAVA.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_faculty`
--

CREATE TABLE `course_faculty` (
  `course_faculty_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `university` varchar(64) NOT NULL,
  `designation` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_faculty`
--

INSERT INTO `course_faculty` (`course_faculty_id`, `name`, `university`, `designation`) VALUES
(1, 'Dr. P Arjun', 'University of Michigan', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `email` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`email`, `name`, `password`) VALUES
('abhieking04@gmail.com', 'Abhishek Pawar', '487a4918a9db41477213e2c922c6d983d7998e977060f715550918421bbf0ebd'),
('admin@webcoursera.com', 'Admin', '8fc132adb41589439181f8624f1dff060381dd32a093f8c4383bebd27e055809'),
('arjun_b180454cs@nitc.ac.in', 'Arjun Prem', 'cc41876b01607ca7c08f6e58e3ed827b968c7314d376445713cf562b11d151e8'),
('deepakdamri@gmail.com', 'Deepak Damri', '67ddb50d16867b4ea99101e27898bdc09662b4f59fe18265b29ea5c8d39e5b07'),
('kunaljagtap2000@gmail.com', 'Kunal Jagtap', '6c1174f4a7508c44972ad33ad1d29662e8d345b51a29e4e4ce73902fc83b7c5c'),
('neelima@gmail.com', 'Neelima Sajeev', '07b04ccc4bbab30cdea11c6108da17064ad46bbc97a9101c2fd5d45306eede31'),
('snt@gmail.com', 'Shobhit Tripathi', 'f4562eb40fb9d827fc518eee4bb4a6146f1a8fc86501ca0fc8250ddc088a770e'),
('vimrajesh@gmail.com', 'Vimal Rajesh', '3b141980153ecb42a541997436881dc4b3261813a264a0497dc50ab026b4f3c1');

-- --------------------------------------------------------

--
-- Table structure for table `user_enrolled_courses`
--

CREATE TABLE `user_enrolled_courses` (
  `completion_status` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_enrolled_courses`
--

INSERT INTO `user_enrolled_courses` (`completion_status`, `email`, `course_id`) VALUES
('0,0,0,0,0,0,0,0,0,0,0,0', 'abhieking04@gmail.com', 1),
('0,0,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 1),
('1,1,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 2),
('0,0,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 3),
('0,0,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 4),
('0,0,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 5),
('0,0,0,0,0,0,0,0,0,0,0,0', 'deepakdamri@gmail.com', 6),
('0,0,0,0,0,0,0,0,0,0,0,0', 'kunaljagtap2000@gmail.com', 1),
('0,0,0,0,0,0,0,0,0,0,0,0', 'kunaljagtap2000@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_faculty_id` (`course_faculty_id`);

--
-- Indexes for table `course_faculty`
--
ALTER TABLE `course_faculty`
  ADD PRIMARY KEY (`course_faculty_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_enrolled_courses`
--
ALTER TABLE `user_enrolled_courses`
  ADD PRIMARY KEY (`email`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_faculty`
--
ALTER TABLE `course_faculty`
  MODIFY `course_faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`course_faculty_id`) REFERENCES `course_faculty` (`course_faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_enrolled_courses`
--
ALTER TABLE `user_enrolled_courses`
  ADD CONSTRAINT `user_enrolled_courses_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_detail` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_enrolled_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
