-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 11:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

CREATE TABLE `subject_info` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `uniname` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`id`, `subject`, `uniname`, `country`, `ranking`) VALUES
(1, 'Data Science', 'Massachusetts Institute of Technology', 'USA', 1),
(2, 'Data Science', 'Imperial College', 'UK', 2),
(3, 'Data Science', 'University of Texas', 'USA', 3),
(4, 'Data Science', 'University of Melbourne', 'Australia', 4),
(5, 'Data Science', 'University of Warwick', 'UK', 5),
(6, 'Data Engineering', 'Carnegie Mellon University', 'USA', 1),
(7, 'Data Engineering', 'Illinois Institute of Technology', 'USA', 2),
(8, 'Data Engineering', 'Georgia Institute of Technology', 'USA', 3),
(9, 'Data Engineering', 'Northeastern University', 'USA', 4),
(10, 'Data Engineering', 'University of Notre Dame', 'USA', 5),
(11, 'Artificial Intelligence', 'Carnegie Mellon University', 'USA', 1),
(12, 'Artificial Intelligence', 'Massachusetts Institute of Technology', 'USA', 2),
(13, 'Artificial Intelligence', 'Stanford University', 'USA', 3),
(14, 'Artificial Intelligence', 'University of California', 'USA', 4),
(15, 'Artificial Intelligence', 'Cornell University', 'USA', 5),
(16, 'Machine Learning', 'Carnegie Mellon University', 'USA', 1),
(17, 'Machine Learning', 'Stanford University', 'USA', 2),
(18, 'Machine Learning', 'University of California', 'USA', 3),
(19, 'Machine Learning', 'University of Toronto', 'Canada', 4),
(20, 'Machine Learning', 'University of Washington', 'USA', 5),
(21, 'Cyber Security', 'University of California', 'USA', 1),
(22, 'Cyber Security', 'Cambridge University', 'UK', 2),
(23, 'Cyber Security', 'Purdue University', 'USA', 3),
(24, 'Cyber Security', 'Carnegie Mellon University', 'USA', 4),
(25, 'Cyber Security', 'Massachusetts Institute of Technology', 'USA', 5),
(26, 'Game Design and Development', 'University of Southern California', 'USA', 1),
(27, 'Game Design and Development', 'Massachusetts Institute of Technology', 'USA', 2),
(28, 'Game Design and Development', 'Standford University', 'USA', 3),
(29, 'Game Design and Development', 'University of Washington', 'USA', 4),
(30, 'Game Design and Development', 'Carnegie Mellon University', 'USA', 5),
(31, 'Database Administration', 'Stanford University', 'USA', 1),
(32, 'Database Administration', 'University of California', 'USA', 2),
(33, 'Database Administration', 'Massachusetts Institute of Technology', 'USA', 3),
(34, 'Database Administration', 'Purdue University', 'USA', 4),
(35, 'Database Administration', 'University of Wisconsin', 'USA', 5),
(36, 'Web Development', 'Utah Valley University', 'USA', 1),
(37, 'Web Development', 'Arizona State University', 'USA', 2),
(38, 'Web Development', 'St. Cloud State University', 'USA', 3),
(39, 'Web Development', 'University of Colorado', 'USA', 4),
(40, 'Web Development', 'University of Wisconsin', 'USA', 5),
(41, 'Block Chain and Cryptography', 'Stanford University', 'USA', 1),
(42, 'Block Chain and Cryptography', 'Sun Yat-sen University', 'China', 2),
(43, 'Block Chain and Cryptography', 'Swansea University', 'UK', 3),
(44, 'Block Chain and Cryptography', 'Technical University of Munich', 'Germany', 4),
(45, 'Block Chain and Cryptography', 'University of British Columbia', 'UK', 5),
(46, 'Computer Graphics', 'Carnegie Mellon University', 'USA', 1),
(47, 'Computer Graphics', 'Purdue University', 'USA', 2),
(48, 'Computer Graphics', 'School of Visual Arts', 'USA', 3),
(49, 'Computer Graphics', 'National University of Singapore', 'Singapore', 4),
(50, 'Computer Graphics', 'ETH Zurich', 'Switzerland', 5),
(51, 'Not', 'Not Selected', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `finance` varchar(255) NOT NULL,
  `opinion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `gender`, `subject`, `class`, `finance`, `opinion`) VALUES
(1, 'l blizz', 'female', 'Data Science', 'sophomore', 'loan', 'hello'),
(2, 'Mahi', 'female', 'Cyber Security', 'senior', 'scholarship', 'good'),
(3, 'Tithi', 'female', 'Artificial Intelligence', 'sophomore', 'scholarship', 'excellent'),
(4, 'Atif', 'male', 'Machine Learning', 'graduate', 'self', 'good'),
(5, 'Allen', 'male', 'Database Administration', 'junior', 'govt', 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'abcd', 'abcd@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'user'),
(2, 'abcd2', 'abcd2@gmail.com', '6e24a85785fd5e2688f1a23aee9d88f3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_info`
--
ALTER TABLE `subject_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_info`
--
ALTER TABLE `subject_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
