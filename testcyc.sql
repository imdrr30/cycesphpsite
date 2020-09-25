-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 05:37 PM
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
(9, 'AR Rahman Music Concert', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.', 'Pune', '9955223311', '2020-02-02', 'assets/images/ARRLive.jpg', 'Free', 'https://www.axs.com/events/392211/an-evening-with-a-r-rahman-tickets?skin=marymoor', 'Tamil Music', 'Music', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.'),
(10, 'Chancey ilaa Anirudh', 'Enjoy Live Concert of Anirudh. Buy tickets now.', 'Chennai', '9955223311', '2020-10-10', 'assets/images/anirudh.jpg', 'Paid', 'https://bookmyshow.com', 'Music', 'Tamil', 'Enjoy Live Concert of Anirudh. Buy tickets now.'),
(11, 'CSK Whistle Podu !', 'Enjoy Watching CSK play LIVE. Buy tickets now.', 'Chennai', '9955223311', '2020-10-05', 'assets/images/csk.jpg', 'Free', 'https://in.bookmyshow.com/', 'Sports', 'Cricket', 'Enjoy Watching CSK play LIVE. Buy tickets now.'),
(12, 'Lean Java', 'Learn Java from Industry experts.', 'Madurai', '9955223311', '2020-10-15', 'assets/images/java.jpg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Java from Industry experts.'),
(13, 'SPB Live Concert', 'Enjoy Listening to SPB singing LIVE.', 'Vellore', '9955223311', '2020-10-20', 'assets/images/spb.jpg', 'Free', 'https://in.bookmyshow.com/', 'Music', 'Tamil', 'Enjoy Listening to SPB singing LIVE.'),
(14, 'Learn PHP Expert Level', 'Learn Php from Industry experts.', 'Coimbatore', '9955223311', '2020-10-21', 'assets/images/php.jpg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Php from Industry experts.'),
(15, 'Learn Swift', 'Learn Swift from Industry experts.', 'Theni', '9955223311', '2020-10-25', 'assets/images/swift.jpeg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Swift from Industry experts.'),
(16, 'Taylor Swift goes live', 'Enjoy watching Tay Tay performing LIVE.', 'Chennai', '9955223311', '2020-10-30', 'assets/images/tay.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Tay Tay performing LIVE.'),
(17, 'Ed Sheeran Shapes', 'Enjoy watching Ed Sheeran performing LIVE.', 'Coimbatore', '9955223311', '2020-01-11', 'assets/images/edsheeran.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Ed Sheeran performing LIVE.'),
(18, 'Hanzimmer\'s Pirate', 'Enjoy watching Hanzimmer performing LIVE.', 'Madurai', '9955223311', '2020-11-02', 'assets/images/hanz.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Hanzimmer performing LIVE.'),
(19, 'Mumbai Indians Rage', 'Watch MI vs SRH Live on Mumbai.', 'Mumbai', '9955223311', '2020-11-03', 'assets/images/mi.jpeg', 'Paid', 'https://in.bookmyshow.com/', 'Sports', 'Cricket', 'Watch MI vs SRH Live on Mumbai.'),
(20, 'Learn Nodejs', 'Learn nodejs from Industry experts.', 'Coimbatore', '9955223311', '2020-10-13', 'assets/images/nodejs.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn nodejs from Industry experts.');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
