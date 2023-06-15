-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 09:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `s_id` int(11) NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`s_id`, `cv`) VALUES
(1, 0x2d2d207068704d7941646d696e2053514c2044756d700a2d2d2076657273696f6e20352e322e300a2d2d2068747470733a2f2f7777772e7068706d7961646d696e2e6e65742f0a2d2d0a2d2d20486f73743a203132372e302e302e310a2d2d2047656e65726174696f6e2054696d653a204d61792031382c20323032332061742030383a323320504d0a2d2d205365727665722076657273696f6e3a2031302e342e32342d4d6172696144420a2d2d205048502056657273696f6e3a20382e312e360a0a5345542053514c5f4d4f4445203d20224e4f5f4155544f5f56414c55455f4f4e5f5a45524f223b0a5354415254205452414e53414354494f4e3b0a5345542074696d655f7a6f6e65203d20222b30303a3030223b0a0a0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f434c49454e543d40404348415241435445525f5345545f434c49454e54202a2f3b0a2f2a2134303130312053455420404f4c445f4348415241435445525f5345545f524553554c54533d40404348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e3d4040434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a2f2a21343031303120534554204e414d455320757466386d6234202a2f3b0a0a2d2d0a2d2d2044617461626173653a2060756e69766572736974795f73797374656d600a2d2d0a0a2d2d202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a0a2d2d0a2d2d205461626c652073747275637475726520666f72207461626c652060636f7572736573600a2d2d0a0a435245415445205441424c452060636f75727365736020280a202060735f636f64656020696e7428313129204e4f54204e554c4c2c0a202060636f757273655f636f646560207661726368617228313529204e4f54204e554c4c2c0a202060636f757273655f6e616d6560207661726368617228333029204e4f54204e554c4c2c0a2020606372656469745f686f7572736020666c6f6174204e4f54204e554c4c0a2920454e47494e453d496e6e6f44422044454641554c5420434841525345543d757466386d62343b0a0a2d2d0a2d2d2044756d70696e67206461746120666f72207461626c652060636f7572736573600a2d2d0a0a494e5345525420494e544f2060636f757273657360202860735f636f6465602c2060636f757273655f636f6465602c2060636f757273655f6e616d65602c20606372656469745f686f75727360292056414c5545530a28312c20274353343331272c2027d8a7d984d8add8b3d8a7d8a8d8a7d8aa20d8a7d984d985d8aad988d8a7d8b2d98ad8a9272c2033293b0a0a2d2d0a2d2d20496e646578657320666f722064756d706564207461626c65730a2d2d0a0a2d2d0a2d2d20496e646578657320666f72207461626c652060636f7572736573600a2d2d0a414c544552205441424c452060636f7572736573600a2020414444204b45592060735f636f646560202860735f636f646560293b0a0a2d2d0a2d2d20436f6e73747261696e747320666f722064756d706564207461626c65730a2d2d0a0a2d2d0a2d2d20436f6e73747261696e747320666f72207461626c652060636f7572736573600a2d2d0a414c544552205441424c452060636f7572736573600a202041444420434f4e53545241494e542060636f75727365735f6962666b5f316020464f524549474e204b4559202860735f636f64656029205245464552454e434553206073747564656e747360202860696460293b0a434f4d4d49543b0a0a2f2a21343031303120534554204348415241435445525f5345545f434c49454e543d404f4c445f4348415241435445525f5345545f434c49454e54202a2f3b0a2f2a21343031303120534554204348415241435445525f5345545f524553554c54533d404f4c445f4348415241435445525f5345545f524553554c5453202a2f3b0a2f2a2134303130312053455420434f4c4c4154494f4e5f434f4e4e454354494f4e3d404f4c445f434f4c4c4154494f4e5f434f4e4e454354494f4e202a2f3b0a);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(30) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `credit_hours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `course_code`, `credit_hours`) VALUES
('الحسابات المتوازية', 'CS431', 3);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` char(11) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `s_id` int(11) NOT NULL,
  `c_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_id`, `c_code`) VALUES
(1, 'CS431');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `s_id` int(11) NOT NULL,
  `course_code` varchar(15) DEFAULT NULL,
  `course_name` varchar(30) DEFAULT NULL,
  `degree` int(11) NOT NULL,
  `appreciation` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`s_id`, `course_code`, `course_name`, `degree`, `appreciation`) VALUES
(1, 'CS431', 'الحسابات المتوازية', 90, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `departement` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `entry_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `level`, `departement`, `college`, `entry_status`) VALUES
(1, 'Ahmed Gamal Gaber', '30106092701953', 'level four', 'Information technology', 'Faculty of computers and information', 'restricted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_code` (`c_code`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career`
--
ALTER TABLE `career`
  ADD CONSTRAINT `career_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`c_code`) REFERENCES `courses` (`course_code`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
