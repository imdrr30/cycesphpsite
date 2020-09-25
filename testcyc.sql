-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 07:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testcyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `shortdes` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `mobilenum` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `bannerimg` text COLLATE utf8_unicode_ci NOT NULL,
  `payment` text COLLATE utf8_unicode_ci NOT NULL,
  `reglink` text COLLATE utf8_unicode_ci NOT NULL,
  `indus` text COLLATE utf8_unicode_ci NOT NULL,
  `sect` text COLLATE utf8_unicode_ci NOT NULL,
  `briefdes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `shortdes`, `location`, `mobilenum`, `date`, `bannerimg`, `payment`, `reglink`, `indus`, `sect`, `briefdes`) VALUES
(7, 'Workshop on Python', 'The FOSSEE team at IIT Bombay offers training programs in Python. These are live assisted remote, interactive workshops. Participants will gain hands-on experience in Python through a series of practice sessions and quizzes. ', 'T. Nagar, Chennai', '9955223311', '2000-09-30', 'assets/images/Python-Programming-Workshop.jpg', 'Free', 'https://www.google.com', 'Computer Science', 'Data Science', 'The FOSSEE team at IIT Bombay offers training programs in Python. These are live assisted remote, interactive workshops. Participants will gain hands-on experience in Python through a series of practice sessions and quizzes. '),
(9, 'AR Rahman Music Concert', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.', 'Pune', '9955223311', '2020-02-02', 'assets/images/ARRLive.jpg', 'Free', 'https://www.axs.com/events/392211/an-evening-with-a-r-rahman-tickets?skin=marymoor', 'Tamil Music', 'Music', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(100) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `email`, `password`, `code`, `status`, `mobile`, `role`) VALUES
(18, 'revan@cyces.co', '$2y$10$c.9iBnHXJHusmKyPuweJZO9z0F4dag9Bk.y0lSujhNARomuBLmGsm', 107856, 'verified', '9999999999', 'ADMIN'),
(19, 'senthil@cyces.co', '$2y$10$lymFBD7.6yk4p23rAmrwhu2wea0WafT7Jdln78RnLKuHyTJ2mvpgG', 107856, 'verified', '9500254950', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
