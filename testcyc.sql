-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2020 at 06:44 PM
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
  `clocal` text COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `events` (`id`, `title`, `clocal`, `shortdes`, `location`, `mobilenum`, `date`, `bannerimg`, `payment`, `reglink`, `indus`, `sect`, `briefdes`) VALUES
(7, 'Workshop on Python', 'en', 'The FOSSEE team at IIT Bombay offers training programs in Python. These are live assisted remote, interactive workshops. Participants will gain hands-on experience in Python through a series of practice sessions and quizzes. ', 'T. Nagar, Chennai', '9955223311', '2000-09-30', 'assets/images/Python-Programming-Workshop.jpg', 'Free', 'https://www.google.com', 'Computer Science', 'Data Science', 'The FOSSEE team at IIT Bombay offers training programs in Python. These are live assisted remote, interactive workshops. Participants will gain hands-on experience in Python through a series of practice sessions and quizzes. '),
(9, 'AR Rahman Music Concert', 'en', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.', 'Pune', '9955223311', '2020-02-02', 'assets/images/ARRLive.jpg', 'Free', 'https://www.axs.com/events/392211/an-evening-with-a-r-rahman-tickets?skin=marymoor', 'Tamil Music', 'Music', 'AR Rahman is a name that needs no introduction to Indian music fans. To call him just a musician or composer would do his impact and legacy no justice. Experience the Maestro\'s Live Concert in Pune on 22nd February 2020.'),
(10, 'Chancey ilaa Anirudh', 'en', 'Enjoy Live Concert of Anirudh. Buy tickets now.', 'Chennai', '9955223311', '2020-10-10', 'assets/images/anirudh.jpg', 'Paid', 'https://bookmyshow.com', 'Music', 'Tamil', 'Enjoy Live Concert of Anirudh. Buy tickets now.'),
(11, 'CSK Whistle Podu !', 'en', 'Enjoy Watching CSK play LIVE. Buy tickets now.', 'Chennai', '9955223311', '2020-10-05', 'assets/images/csk.jpg', 'Free', 'https://in.bookmyshow.com/', 'Sports', 'Cricket', 'Enjoy Watching CSK play LIVE. Buy tickets now.'),
(12, 'Lean Java', 'en', 'Learn Java from Industry experts.', 'Madurai', '9955223311', '2020-10-15', 'assets/images/java.jpg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Java from Industry experts.'),
(13, 'SPB Live Concert', 'en', 'Enjoy Listening to SPB singing LIVE.', 'Vellore', '9955223311', '2020-10-20', 'assets/images/spb.jpg', 'Free', 'https://in.bookmyshow.com/', 'Music', 'Tamil', 'Enjoy Listening to SPB singing LIVE.'),
(14, 'Learn PHP Expert Level', 'en', 'Learn Php from Industry experts.', 'Coimbatore', '9955223311', '2020-10-21', 'assets/images/php.jpg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Php from Industry experts.'),
(15, 'Learn Swift', 'en', 'Learn Swift from Industry experts.', 'Theni', '9955223311', '2020-10-25', 'assets/images/swift.jpeg', 'Free', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn Swift from Industry experts.'),
(16, 'Taylor Swift goes live', 'en', 'Enjoy watching Tay Tay performing LIVE.', 'Chennai', '9955223311', '2020-10-30', 'assets/images/tay.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Tay Tay performing LIVE.'),
(17, 'Ed Sheeran Shapes', 'en', 'Enjoy watching Ed Sheeran performing LIVE.', 'Coimbatore', '9955223311', '2020-01-11', 'assets/images/edsheeran.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Ed Sheeran performing LIVE.'),
(18, 'Hanzimmer\'s Pirate', 'en', 'Enjoy watching Hanzimmer performing LIVE.', 'Madurai', '9955223311', '2020-11-02', 'assets/images/hanz.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'Enjoy watching Hanzimmer performing LIVE.'),
(19, 'Mumbai Indians Rage', 'en', 'Watch MI vs SRH Live on Mumbai.', 'Mumbai', '9955223311', '2020-11-03', 'assets/images/mi.jpeg', 'Paid', 'https://in.bookmyshow.com/', 'Sports', 'Cricket', 'Watch MI vs SRH Live on Mumbai.'),
(20, 'Learn Nodejs', 'en', 'Learn nodejs from Industry experts.', 'Coimbatore', '9955223311', '2020-10-13', 'assets/images/nodejs.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Engineering', 'Computer Science', 'Learn nodejs from Industry experts.'),
(23, 'சென்னையில் மலோன் நேரடி இசை நிகழ்ச்சியை இடுங்கள்', 'ta', 'சென்னையில் மலோன் நேரடி இசை நிகழ்ச்சியை இடுங்கள்', 'Chennai', '9955223311', '2020-11-03', 'assets/images/tay.jpg', 'Paid', 'https://in.bookmyshow.com/', 'Music', 'English', 'சென்னையில் மலோன் நேரடி இசை நிகழ்ச்சியை இடுங்கள்');

-- --------------------------------------------------------

--
-- Table structure for table `strings`
--

CREATE TABLE `strings` (
  `id` int(11) NOT NULL,
  `lang` text NOT NULL,
  `langfull` text NOT NULL,
  `login` text DEFAULT NULL,
  `greetings` text DEFAULT NULL,
  `brand_full` text NOT NULL,
  `brand` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `incorrect` text NOT NULL,
  `not_a_member` text NOT NULL,
  `signup` text NOT NULL,
  `member_message` text NOT NULL,
  `sup_n` text DEFAULT NULL,
  `s_greetings` text DEFAULT NULL,
  `email_address` text DEFAULT NULL,
  `cpass` text DEFAULT NULL,
  `phone_num` text DEFAULT NULL,
  `exist_mem` text DEFAULT NULL,
  `login_here` text DEFAULT NULL,
  `email_exists` text DEFAULT NULL,
  `passntmatched` text DEFAULT NULL,
  `code_verif` text DEFAULT NULL,
  `code_message` text DEFAULT NULL,
  `code_message_nt_verified` text DEFAULT NULL,
  `enter_verif_code` text DEFAULT NULL,
  `code_inc` text DEFAULT NULL,
  `home` text DEFAULT NULL,
  `logout` text DEFAULT NULL,
  `search` text DEFAULT NULL,
  `all_events` text DEFAULT NULL,
  `add_event` text DEFAULT NULL,
  `dashboard` text DEFAULT NULL,
  `events` text DEFAULT NULL,
  `industry` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `sector` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `payment` text DEFAULT NULL,
  `apply_filter` text DEFAULT NULL,
  `engineering` text DEFAULT NULL,
  `music` text DEFAULT NULL,
  `educ` text DEFAULT NULL,
  `english` text DEFAULT NULL,
  `tamil` text DEFAULT NULL,
  `computer` text DEFAULT NULL,
  `chennai` text DEFAULT NULL,
  `madurai` text DEFAULT NULL,
  `coimbatore` text DEFAULT NULL,
  `mumbai` text DEFAULT NULL,
  `today` text DEFAULT NULL,
  `tomorrow` text DEFAULT NULL,
  `week` text DEFAULT NULL,
  `month` text DEFAULT NULL,
  `free` text DEFAULT NULL,
  `paid` text DEFAULT NULL,
  `event_details` text DEFAULT NULL,
  `title_text` text DEFAULT NULL,
  `enter_title` text DEFAULT NULL,
  `sdescript` text DEFAULT NULL,
  `enter_sdescript` text DEFAULT NULL,
  `bdescript` text DEFAULT NULL,
  `enter_bdescript` text DEFAULT NULL,
  `enter_location` text DEFAULT NULL,
  `enter_industry` text DEFAULT NULL,
  `enter_sector` text DEFAULT NULL,
  `enter_mobile` text DEFAULT NULL,
  `banner_event` text DEFAULT NULL,
  `choosefile` text DEFAULT NULL,
  `event_payment` text DEFAULT NULL,
  `reglink` text DEFAULT NULL,
  `link_to_form` text DEFAULT NULL,
  `submit` text DEFAULT NULL,
  `event_success` text DEFAULT NULL,
  `event_failed` text DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strings`
--

INSERT INTO `strings` (`id`, `lang`, `langfull`, `login`, `greetings`, `brand_full`, `brand`, `email`, `pass`, `incorrect`, `not_a_member`, `signup`, `member_message`, `sup_n`, `s_greetings`, `email_address`, `cpass`, `phone_num`, `exist_mem`, `login_here`, `email_exists`, `passntmatched`, `code_verif`, `code_message`, `code_message_nt_verified`, `enter_verif_code`, `code_inc`, `home`, `logout`, `search`, `all_events`, `add_event`, `dashboard`, `events`, `industry`, `location`, `sector`, `date`, `payment`, `apply_filter`, `engineering`, `music`, `educ`, `english`, `tamil`, `computer`, `chennai`, `madurai`, `coimbatore`, `mumbai`, `today`, `tomorrow`, `week`, `month`, `free`, `paid`, `event_details`, `title_text`, `enter_title`, `sdescript`, `enter_sdescript`, `bdescript`, `enter_bdescript`, `enter_location`, `enter_industry`, `enter_sector`, `enter_mobile`, `banner_event`, `choosefile`, `event_payment`, `reglink`, `link_to_form`, `submit`, `event_success`, `event_failed`, `settings`, `language`, `content`) VALUES
(1, 'en', 'English', 'Login', 'Hello there! Welcome Back', 'Tamil Nadu Startup And Innovation Mission', 'TANSIM', 'Email', 'Password', 'Incorrect email or password! ', 'Not yet a member?', 'Signup Now', 'It\'s look like you\'re not a yet member! Click on the bottom link to signup. ', 'Signup', 'It\'s quick and easy.', 'Email Address', 'Confirm password', 'Mobile Number', 'Already a member?', 'Login here', 'Email that you have entered is already exist!', 'Confirm password not matched!', 'Code Verification', 'We\'ve sent a verification code to your email - ', 'It\'s look like you haven\'t still verify your email - ', 'Enter verification code', 'You\'ve entered incorrect code!', 'Home', 'Logout', 'Search', 'All Events', 'Add New Event', 'Dashboard', 'Events', 'Industry', 'Location', 'Sector', 'Date', 'Free or Paid', 'Apply Filter', 'Engineering', 'Music', 'Education', 'English', 'Tamil', 'Computer', 'Chennai', 'Madurai', 'Coimbatore', 'Mumbai', 'Today', 'Tomorrow', 'Week', 'Month', 'Free', 'Paid', 'Event Details', 'Title', 'Enter title', 'Short Description', 'Enter short description', 'Brief Description', 'Enter brief description', 'Enter location', 'Enter industry', 'Enter sector', 'Enter mobile', 'Event Banner image', 'Choose File', 'Event Payment', 'Registration Link', 'Link to form', 'Submit', 'Event Added Successfully!!', 'Sorry, Event was not added.', 'Settings', 'Language', 'Content'),
(2, 'ta', 'தமிழ்', 'உள்நுழை', 'வணக்கம்!', '\r\nதமிழ்நாடு தொடக்க மற்றும் கண்டுபிடிப்பு பணி', 'டான்சிம்', 'மின்னஞ்சல்', 'கடவுச்சொல்', 'தவறான மின்னஞ்சல் அல்லது கடவுச்சொல்!', 'உறுப்பினர் அல்ல ?', 'பதிவுபெறு', 'நீங்கள் இன்னும் உறுப்பினராக இல்லை என்பது போல் தெரிகிறது! பதிவுபெற கீழே உள்ள இணைப்பைக் கிளிக் செய்க.', 'பதிவுபெறுதல்', 'இது விரைவானது மற்றும் எளிதானது.\r\n', 'மின்னஞ்சல் முகவரி\r\n', 'கடவுச்சொல்லை உறுதிப்படுத்தவும்\r\n', 'கைபேசி எண்\r\n', 'ஏற்கனவே உறுப்பினரா?\r\n', 'இங்கே உள்நுழைக\r\n', '\r\nநீங்கள் உள்ளிட்ட மின்னஞ்சல் ஏற்கனவே உள்ளது!', 'கடவுச்சொல் பொருந்தவில்லை என்பதை உறுதிப்படுத்தவும்!\r\n', 'குறியீடு சரிபார்ப்பு\r\n', 'உங்கள் மின்னஞ்சலுக்கு சரிபார்ப்புக் குறியீட்டை அனுப்பியுள்ளோம் - \r\n', 'உங்கள் மின்னஞ்சலை நீங்கள் இன்னும் சரிபார்க்கவில்லை போல் தெரிகிறது -\r\n', 'சரிபார்ப்புக் குறியீட்டை உள்ளிடவும்\r\n', 'நீங்கள் தவறான குறியீட்டை உள்ளிட்டுள்ளீர்கள்!\r\n', 'வீடு', 'வெளியேறு', 'தேடல்', 'அனைத்து நிகழ்வுகளும்', 'புதிய நிகழ்வைச் சேர்க்கவும்', 'டாஷ்போர்டு', 'நிகழ்வுகள்', 'தொழில்', 'இடம்', 'துறை', 'தேதி', 'கட்டணம்', 'வடிகட்டியைப் பயன்படுத்துக', 'பொறியியல்', 'இசை', 'கல்வி', 'ஆங்கிலம்', 'தமிழ்', 'கணினி', 'சென்னை', 'மதுரை', 'கோயம்புத்தூர்', 'மும்பை', 'இன்று', 'நாளை', 'வாரம்', 'மாதம்', 'இலவசம்', 'பணம்', 'நிகழ்வு விவரங்கள்', 'தலைப்பு', 'தலைப்பை உள்ளிடுக', 'குறுகிய விளக்கம்', 'குறுகிய விளக்கத்தை உள்ளிடவும்', 'சுருக்கமான விளக்கம்', 'சுருக்கமான விளக்கத்தை உள்ளிடவும்', 'இருப்பிடத்தை உள்ளிடவும்', 'தொழிற்துறையை உள்ளிடவும்', 'துறையை உள்ளிடவும்', 'மொபைலை உள்ளிடவும்', 'நிகழ்வு பேனர் படம்', 'கோப்பை தேர்ந்தெடுங்கள்', 'நிகழ்வு கட்டணம்', 'பதிவு இணைப்பு', 'படிவத்திற்கான இணைப்பு', 'சமர்ப்பிக்கவும்', 'நிகழ்வு வெற்றிகரமாக சேர்க்கப்பட்டது !!', 'மன்னிக்கவும், நிகழ்வு சேர்க்கப்படவில்லை.', 'அமைப்புகள்', 'மொழி', 'உள்ளூர்மயமாக்கல்');

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
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `email`, `password`, `code`, `status`, `mobile`, `role`, `language`, `content`) VALUES
(18, 'revan@cyces.co', '$2y$10$c.9iBnHXJHusmKyPuweJZO9z0F4dag9Bk.y0lSujhNARomuBLmGsm', 107856, 'verified', '9999999999', 'ADMIN', 'en', 'en'),
(19, 'senthil@cyces.co', '$2y$10$lymFBD7.6yk4p23rAmrwhu2wea0WafT7Jdln78RnLKuHyTJ2mvpgG', 107856, 'verified', '9500254950', 'USER', 'en', 'en'),
(22, 'revan@cyces.co2', '$2y$10$QdFDuC.rGBrqyCyYK.Pai.1WAUEvtz.whmuB09BoVvCZ/PYanLiPu', 553975, 'notverified', '9710262926', 'USER', 'ta', 'ta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strings`
--
ALTER TABLE `strings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lang` (`lang`) USING HASH;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
