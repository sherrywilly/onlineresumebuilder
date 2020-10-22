-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `from_date` year(4) NOT NULL,
  `to_date` year(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `college` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `rid`, `from_date`, `to_date`, `course`, `college`) VALUES
(11, 21, 2020, 2020, 'fgd', 'AZXSDaD'),
(12, 21, 2020, 2020, 'fgdasdas', 'AZXSDaD'),
(13, 22, 2020, 2020, 'fgd', 'AZXSDaD'),
(14, 25, 2020, 2020, 'fgd', 'AZXSDaD'),
(15, 25, 2020, 2020, 'fgd', 'AZXSDaD'),
(16, 25, 2020, 2020, 'fgd', 'AZXSDaD'),
(17, 26, 2020, 2020, 'fgd', 'AZXSDaD'),
(18, 26, 2020, 2020, 'fgdasdas', 'AZXSDaD'),
(21, 28, 2020, 2020, 'fgd', 'AZXSDaD'),
(22, 29, 2020, 2020, 's6', 'AZXSDaD'),
(23, 29, 2014, 2020, 's6', 'AZXSDaD'),
(24, 30, 2020, 2020, 'fgd', 'AZXSDaD'),
(25, 31, 2020, 2020, 'hjjmhg', 'fhjmfm'),
(26, 31, 2020, 2020, 'hjjmhgrfdsgvds', 'fhjmfm'),
(27, 32, 2020, 2020, 'fgd', 'AZXSDaD'),
(32, 39, 2020, 2020, 'bachelor of computer application', 'university institute of technology mannady'),
(33, 40, 2020, 2020, 's6', 'AZXSDaD'),
(36, 13, 2020, 2020, 'fgd', 'refreg'),
(37, 13, 2020, 2020, 'fgd', 'refreg'),
(38, 13, 2020, 2020, 'fgd', 'refreg');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `hobbie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `rid`, `hobbie`) VALUES
(8, 21, 'dcDC'),
(9, 21, 'dsC'),
(10, 21, 'sdfz'),
(11, 21, 'fdr'),
(12, 21, 'fdggf'),
(13, 22, 'xzzx '),
(14, 26, 'fcdxgb '),
(16, 28, 'gbedb'),
(17, 30, '5t4yt45e'),
(18, 32, 'dsfcsdxzfv'),
(24, 39, 'trgrgy'),
(25, 13, 'tghbrtf');

-- --------------------------------------------------------

--
-- Table structure for table `resume_build`
--

CREATE TABLE `resume_build` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fresher` tinyint(1) NOT NULL,
  `obj` varchar(1000) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_build`
--

INSERT INTO `resume_build` (`id`, `fname`, `lname`, `address`, `dob`, `email`, `phone`, `fresher`, `obj`, `uid`) VALUES
(13, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-04', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(15, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-10', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(16, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-04', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(17, 'Sherry', 'Wilson', 'Nahjsksbsksk skwkw', '2020-10-10', 'Sherrywilson521@gmai', '+918086498807', 0, '', 1),
(18, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-04', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(19, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-10', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(20, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-11', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(21, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-18', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(22, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-03', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(23, 'sherry', 'wilson', 'thekkuvilayil house\r\nkaithaparambu po', '2020-10-11', 'sherrywilson521@gmai', '06238639239', 0, '', 1),
(24, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-08', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(25, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-11', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(26, 'Sherry', 'Wilson', 'Nahjsksbsksk skwkw', '0000-00-00', 'Sherrywilson521@gmai', '+918086498807', 0, '', 1),
(28, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-11', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(29, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-08', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(30, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-04', 'sherrywilson521@gmai', '+919947371692', 0, '', 1),
(31, 'anoop', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-02', 'sherrywilson521@gmail.com', '+919947371692', 0, '', 1),
(32, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-11', 'sherrywilson521@gmail.com', '+919947371692', 0, '', 1),
(39, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-10', 'sherrywilson521@gmail.com', '+919947371692', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	consequat.', 2),
(40, 'Jerry', 'Wilson', 'Ghjhch, Ftzjfhgcnjj\r\nFtzjfhgcnjj', '2020-10-10', 'sherrywilson521@gmail.com', '+919947371692', 0, 'rfeawsfaestfazesw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `rid`, `skill`) VALUES
(5, 21, 'DFSDXF'),
(6, 21, 'DFDF'),
(7, 21, 'DRFG'),
(10, 26, 'fcgbfcd'),
(12, 28, 'ghhbfgd'),
(13, 30, '5t45t'),
(14, 39, 'dsfcsdfv'),
(15, 39, 'dsvfsdx'),
(23, 39, 'tyhgfh'),
(30, 13, 'tgrergter');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `path` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `path`, `name`, `img`) VALUES
(19, '../templates/5f86ab8df263b8.91027127.php', 'sdxcAZSDX', '../img/5f86ab8def18f0.56466764.jpg'),
(20, '../templates/5f86aba4a76406.52871821.php', 'dfvdxzv', '../img/5f86aba47691a2.99599626.png'),
(22, '../templates/5f912f646c3b71.83862333.php', 'dsfsfsdfsdfs', '../img/5f912f6468dc00.36358012.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(1, 'sherry', 'wilson', 'admin@gmail.com', '9656007742', 'admin@123'),
(2, 'Jerry', '', 'sherrywilson', 'sherrywilson', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `from_date` year(4) NOT NULL DEFAULT current_timestamp(),
  `to_date` year(4) NOT NULL,
  `company` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `rid`, `from_date`, `to_date`, `company`, `post`, `description`) VALUES
(7, 21, 0000, 2020, 'Sherry Wilson', 'zzX', ''),
(8, 22, 0000, 2020, 'Sherry Wilson', 'zzX', ''),
(9, 26, 0000, 2020, 'Sherry Wilson', 'zzX', ''),
(12, 28, 0000, 2020, 'Sherry Wilson', 'zzX', ''),
(13, 39, 0000, 2020, 'Facebook', 'Senior Interface Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	consequat.'),
(14, 39, 0000, 2020, 'Apple Inc.', 'Senior Interface Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	consequat.'),
(15, 39, 0000, 2020, 'Microsoft', 'Principal and Creative Lead', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	consequat.'),
(21, 40, 0000, 0000, 'Sherry Wilson', 'zzX', 'fgvdzgvzaesdrgfv'),
(22, 40, 0000, 0000, 'Sherry Wilson', 'zzX', 'fgvdzgvzaesdrgfv'),
(23, 40, 2020, 0000, 'Sherry Wilson', 'zzX', 'fgvdzgvzaesdrgfv'),
(28, 13, 2020, 2020, 'Sherry Wilson', 'zzX', 'wewsrfewfews');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`rid`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_hobbie` (`rid`);

--
-- Indexes for table `resume_build`
--
ALTER TABLE `resume_build`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_resume` (`uid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_skill` (`rid`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumeid` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `resume_build`
--
ALTER TABLE `resume_build`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `resume_id` FOREIGN KEY (`rid`) REFERENCES `resume_build` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `resume_hobbie` FOREIGN KEY (`rid`) REFERENCES `resume_build` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resume_build`
--
ALTER TABLE `resume_build`
  ADD CONSTRAINT `user_resume` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `resume_skill` FOREIGN KEY (`rid`) REFERENCES `resume_build` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `resumeid` FOREIGN KEY (`rid`) REFERENCES `resume_build` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
