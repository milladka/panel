-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 12:39 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panelsaina`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `namecourse` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `timecourse` varchar(100) CHARACTER SET utf8 NOT NULL,
  `typecourse` varchar(60) CHARACTER SET utf8 NOT NULL,
  `languagecourse` varchar(60) CHARACTER SET utf8 NOT NULL,
  `desccourse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `amountcourse` varchar(10) CHARACTER SET utf8 NOT NULL,
  `status` enum('active','Inactive','','') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `namecourse`, `timecourse`, `typecourse`, `languagecourse`, `desccourse`, `amountcourse`, `status`) VALUES
(14, 'Ù…Ù‚Ø¯Ù…Ø§ØªÛŒ', '100 Ø±ÙˆØ²', 'ØºÛŒØ±Ø­Ø¶ÙˆØ±ÛŒ', 'Ø§Ø³Ù¾Ø§Ù†ÛŒØ§ÛŒÛŒ', 'ØªØ³Øª', '1000', 'active'),
(15, 'Ù¾ÛŒØ´Ø±ÙØªÙ‡', '100 Ø±ÙˆØ²', 'Ø­Ø¶ÙˆØ±ÛŒ', 'Ø§Ø³Ù¾Ø§Ù†ÛŒØ§ÛŒÛŒ', '55', '55', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `viewname` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `viewname`) VALUES
(1, 'English', 'Ø§Ù†Ú¯Ù„ÛŒØ³ÛŒ'),
(2, 'Spanish', 'Ø§Ø³Ù¾Ø§Ù†ÛŒØ§ÛŒÛŒ');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `textnews` text NOT NULL,
  `timenews` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `textnews`, `timenews`) VALUES
(6, 'Ù…ØªÙ† ØªØ³Øª Ø®Ø¨Ø± Ùˆ Ø§Ø·Ù„Ø§Ø¹ Ø±Ø³Ø§Ù†ÛŒ Ø³Ø§ÛŒÙ†Ø§ Ø²Ø¨Ø§Ù†', '2018-11-12 00:36:46'),
(7, 'Ù…ØªÙ† Ø®Ø¨Ø± 2', '2018-11-14 19:04:31'),
(8, 'Ù…ØªÙ† Ø®Ø¨Ø± 3', '2018-11-14 19:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nameuser` varchar(100) CHARACTER SET utf8 NOT NULL,
  `typecourse` varchar(100) CHARACTER SET utf8 NOT NULL,
  `languagescourse` varchar(60) CHARACTER SET utf8 NOT NULL,
  `namecourse` text CHARACTER SET utf8 NOT NULL,
  `filekartmelli` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filemadrak` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fileresume` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `timereq` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `id_user`, `nameuser`, `typecourse`, `languagescourse`, `namecourse`, `filekartmelli`, `filemadrak`, `fileresume`, `status`, `timereq`) VALUES
(12, '16', 'milad', 'Ø¢Ù…ÙˆØ²Ø´ ØºÛŒØ±Ø­Ø¶ÙˆØ±ÛŒ', 'Ø§Ù†Ú¯Ù„ÛŒØ³ÛŒ', 'Ù…Ù‚Ø¯Ù…Ø§ØªÛŒ 100 Ø±ÙˆØ² Ú©Ø¯ 14', 'upload/5bef53e614f959.18935507.jpg', 'upload/5bef53e614f955.49807428.jpg', 'upload/5bef53e614f956.23124272.pdf', 0, '2018-11-16 23:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `codemelli` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `mobile` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `state` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `city` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `postalcode` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `languages` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `user_role` enum('user','admin') NOT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `Length` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `codemelli`, `phone`, `mobile`, `address`, `state`, `city`, `postalcode`, `languages`, `user_role`, `account_type`, `Length`) VALUES
(15, 'admin', '3bc8ebcb96286095b2d9af3302def70a29cc90c23b1459d788bcf1fd0d5e690b', 'mihancivil@gmail.com', 'Ù…Ù‡Ø¯ÛŒ ØµÙØ±ÛŒ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL),
(16, 'milad', '3bc8ebcb96286095b2d9af3302def70a29cc90c23b1459d788bcf1fd0d5e690b', 'info@themeyab.com', 'Ù…ÛŒÙ„Ø§Ø¯ Ú©Ø±ÛŒÙ…ÛŒ', '4450015932', '09378523029', '09132543924', 'Ù†Ø§Ø±Ù…Ú©', 'ØªÙ‡Ø±Ø§Ù†', 'Ø¯Ù…Ø§ÙˆÙ†Ø¯ ', '8931633781', 'Ø§Ù†Ú¯Ù„ÛŒØ³ÛŒ', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
