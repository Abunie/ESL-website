-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 24, 2018 at 10:48 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(100) NOT NULL,
  `author` int(16) NOT NULL,
  `reciepent` int(16) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL,
  `message` varchar(4000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `author`, `reciepent`, `time`, `message`) VALUES
(1, 3, 1, 1534993639, 'dd'),
(2, 3, 1, 1535060184, 'HEllo'),
(3, 1, 4, 1535060373, 'Hello'),
(4, 1, 4, 1535061040, 'Hello'),
(5, 1, 4, 1535064383, 'Hello'),
(6, 1, 4, 1535064389, 'Hello'),
(7, 1, 4, 1535064461, 'Hello'),
(9, 3, 1, 1535064690, 'hello'),
(10, 3, 1, 1535064885, 'Hello'),
(11, 3, 1, 1535064897, 'Hello'),
(12, 3, 4, 1535067581, 'i am hungry'),
(13, 1, 4, 1535067725, 'works \r\n'),
(14, 4, 1, 1535069174, 'Hello'),
(15, 4, 1, 1535069189, 'Commment tu va ?'),
(16, 4, 1, 1535149602, 'How are u ?');

-- --------------------------------------------------------

--
-- Table structure for table `Relationship`
--

CREATE TABLE `Relationship` (
  `userone_id` int(100) NOT NULL,
  `usertwo_id` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `actionuser_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Relationship`
--

INSERT INTO `Relationship` (`userone_id`, `usertwo_id`, `status`, `actionuser_id`) VALUES
(1, 4, 0, 1),
(3, 4, 0, 3),
(1, 3, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `User_information`
--

CREATE TABLE `User_information` (
  `id` int(50) NOT NULL,
  `f_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emails` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_y` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hobbies` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `t_degree` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Bio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User_information`
--

INSERT INTO `User_information` (`id`, `f_name`, `l_name`, `u_name`, `emails`, `password`, `class_y`, `hobbies`, `t_degree`, `role`, `Bio`, `picture`) VALUES
(1, 'TIEMOKO', 'BAMBA', 'tbamba', 'tiemoko@ualberta.ca', 'mois', '2nd year electrical', 'soccer, video games, programming  ', 'None', 'Mentor', 'I am here to help you guys, so no hesitation if you need my help  ', 0x494d475f313133392e6a7067),
(3, 'abun', 'abun', 'abun', 'abun@ualberta.ca', 'yous', '2nd year computer eng', 'soccer, video games, programming  ', 'None', 'Mentor', 'I am here to help you guys, so no hesitation if you need my help  ', 0x32303636333931305f313637393133373736323131303033345f333334313831303034303834363338313237355f6e2e6a7067),
(4, 'TIEOKO', 'BAMBA', 'TIEOKO', 'tieoko@ualberta.ca', 'je', '2nd year electrical', 'soccer, movies  ', 'none', 'student', 'I am here to help you guys, so no hesitation if you need my help  ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`),
  ADD KEY `reciepent` (`reciepent`);

--
-- Indexes for table `Relationship`
--
ALTER TABLE `Relationship`
  ADD KEY `relationship_ibfk_1` (`userone_id`),
  ADD KEY `usertwo_id` (`usertwo_id`),
  ADD KEY `actionuser_id` (`actionuser_id`);

--
-- Indexes for table `User_information`
--
ALTER TABLE `User_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_name` (`u_name`),
  ADD UNIQUE KEY `emails` (`emails`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `User_information`
--
ALTER TABLE `User_information`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Messages`
--
ALTER TABLE `Messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`author`) REFERENCES `User_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`reciepent`) REFERENCES `User_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Relationship`
--
ALTER TABLE `Relationship`
  ADD CONSTRAINT `relationship_ibfk_1` FOREIGN KEY (`userone_id`) REFERENCES `User_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relationship_ibfk_2` FOREIGN KEY (`usertwo_id`) REFERENCES `User_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relationship_ibfk_3` FOREIGN KEY (`actionuser_id`) REFERENCES `User_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
