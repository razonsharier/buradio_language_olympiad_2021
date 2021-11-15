-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 06:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buradio_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text CHARACTER SET utf8 NOT NULL,
  `option1` varchar(222) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(222) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(222) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(222) CHARACTER SET utf8 NOT NULL,
  `userans` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option1`, `option2`, `option3`, `option4`, `userans`) VALUES
(1, 'তমদ্দুন মজলিস কবে গঠিত হয় ?', '১ সেপ্টেম্বর ১৯৪৭', '২ সেপ্টেম্বর ১৯৪৭', '৩ সেপ্টেম্বর ১৯৪৭', '৪ সেপ্টেম্বর ১৯৪৭', 'a1'),
(2, 'সর্বদলীয় রাষ্ট্রভাষা সংগ্রাম পরিষদ গঠিত হয় ?', '১ মার্চ ১৯৪৮', '২ মার্চ ১৯৪৮', '৩ মার্চ ১৯৪৮', '৪ মার্চ ১৯৪৮', 'a2'),
(3, 'কত সালে বাংলা ভাষাকে রাষ্ট্রভাষা হিসাবে স্বীকৃতি দেয়া হয় ?', '১৯৫৪', '১৯৫৫', '১৯৫৬', '১৯৫৭', 'a3'),
(4, 'একুশে পদক প্রবর্তন হয় কত সালে? ', '১৯৭৪', '১৯৭৫', '১৯৭৬', '১৯৭৭', 'a4'),
(5, '“কবর ” নাটকটি প্রথম মঞ্চস্থ হয় কবে?', '২১ ফেব্রুয়ারি ১৯৫৪', '২২ ফেব্রুয়ারি ১৯৫৪', '২৩ ফেব্রুয়ারি ১৯৫৪', '২৪ ফেব্রুয়ারি ১৯৫৪', 'a5'),
(6, 'দেশের বাইরে প্রথম শহীদ মিনার নির্মিত হয় কোথায়?', 'জাপান', 'কানাডা', 'ভারত', 'সোভিয়েত ইউনিয়ন', 'a6'),
(7, 'ভাষা আন্দোলনের মুখপাত্র কোন পত্রিকা?', 'সাপ্তাহিক সৈনিক', 'দৈনিক আজাদ', 'ইত্তেহাদ', 'দৈনিক ইনসাফ', 'a7'),
(8, '১৯৫১ সালে পাকিস্তানের প্রথম আদমশুমারি অনুযায়ী, মোট জনসংখ্যার কত শতাংশ বাংলা ভাষাভাষী লোক ছিল?', '৫৪.৬০%', '৫৫%', '৫৫.৬০%', '৬০%', 'a8'),
(9, 'রাষ্ট্রভাষা সংগ্রাম পরিষদ আহবায়ক কে ছিলেন?', 'আবুল কাশেম', 'নূরুল হক ভূঁইয়া', 'সামসুল আলম', 'অলি আহাদ', 'a9'),
(10, 'তমদ্দুন মজলিসের পত্রিকা \'সাপ্তাহিক সৈনিক\' যাত্রা শুরু কবে?', '১৪ নভেম্বর ১৯৪৮', '১৫ নভেম্বর ১৯৪৯', '১৪ নভেম্বর ১৯৫২', '১৫ নভেম্বর ১৯৫২', 'a10'),
(11, 'একুশে ফেব্রুয়ারি ইউনেস্কো কর্তৃক আন্তর্জাতিক মাতৃভাষা দিবস হিসেবে স্বীকৃতি পায়-', '১৭ সেপ্টেম্বর ১৯৯৯', '২৭ সেপ্টেম্বর ১৯৯৮', '১৭ নভেম্বর ১৯৯৯', '২৭ নভেম্বর ১৯৯৯', 'a11'),
(12, 'স্বাধীন বাংলাদেশের  প্রথম মুক্তিযুদ্ধভিত্তিক সিনেমা হলো - ', 'ওরা ১১ জন', 'গেরিলা', 'একাত্তরের যীশু', 'আগুনের পরশমণি', 'a12'),
(13, 'শেখ হাসিনাকে \'বাংলা একাডেমি সম্মানসূচক ফেলোশিপ\' প্রদান করা হয় কত সালে? ', '২০১১', '২০১২', '২০১৩', '২০১৪', 'a13'),
(14, 'বাংলা একাডেমির লোগোতে কয়টি রঙ আছে? ', '২', '৩', '৪', '৫', 'a14'),
(15, 'ভাষা আন্দোলনে ১ম হরতালে শেখ মুজিবসহ কতজন আটক হন? ', '৬৩ জন', '৬৫ জন', '৬৭ জন', '৬৯ জন', 'a15'),
(16, 'ভাষা আন্দোলনের সময় বালক অহিউল্লাহ কোন শ্রেনীর ছাত্র ছিল?', '৩য়', '৪র্থ', '৫ম', '৬ষ্ঠ', 'a16'),
(17, 'ভাষা আন্দোলনের ২য় শহীদ হন কে? ', 'রফিকউদ্দিন আহমদ', 'আব্দুল জব্বার', 'আব্দুস সালাম', 'আবুল বরকত', 'a17'),
(18, 'নিচের কোনটি হাসান হাফিজুর রহমানের কাব্য নয়?', 'আরো দুটি মৃত্যু', 'বিমুখ প্রান্তর', 'শোকার্ত তরবারী', 'বন্দী শিবির থেকে', 'a18'),
(19, '১৯৫২ সালের ২১ শে ফেব্রুয়ারি বাংলা কত সাল ছিল?', '১৩৫৫', '১৩৫৬', '১৩৫৭', '১৩৫৮', 'a19'),
(20, '\'অমর একুশে বইমেলা\' কবে থেকে যাত্রা শুরু করে? ', '১৯৭১', '১৯৭৮', '১৯৮২', '১৯৮৪', 'a20'),
(21, '\'ফাগুন হাওয়ায়\' চলচ্চিত্রের পরিচালক কে?', 'মোস্তফা সারোয়ার ফারুকী', 'ফরিদুর রেজা সাগর', 'তৌকির আহমেদ', 'হুমায়ুন আহমেদ', 'a21'),
(22, 'ভাষা আন্দোলনের ইতিহাসে প্রথম গুলিবর্ষণের ঘটনা কবে ঘটে?', '১১ মার্চ ১৯৪৮', '১২ মার্চ১৯৪৮', '১৩ মার্চ ১৯৪৮', '১৪ মার্চ ১৯৪৮', 'a22'),
(23, 'যারা প্রাণ দিয়েছে ওখানে \r\nরমনার রৌদ্রদগ্ধ_____ গাছের তলায়\r\nভাষার জন্য মাতৃভাষার জন্য বাংলার জন্য।\r\n-শূন্যস্থানের শব্দটি কি?', 'বট', 'কৃষ্ণচূড়া', 'কদম', 'শিমুল', 'a23'),
(24, 'ভাষা আন্দোলনের প্রথম সংকলন ‘একুশে ফেব্রুয়ারি’ গ্রন্থের সম্পাদক কে ছিলেন?', 'হাসান হাফিজুর রহমান', 'শামসুর রাহমান', 'সুফিয়া কামাল', 'আজাদ চৌধুরী ', 'a24'),
(25, '\'সালাম সালাম হাজার সালাম \' এই গানটির গীতিকার কে?', 'ফজল এ খোদা', 'আব্দুল গাফফার চৌধুরী', 'আলতাফ মাহমুদ', 'গাজীউল হক', 'a25'),
(26, '\'বর্ণমালা, আমার দুঃখিনী বর্ণমালা\' কবিতাটি কার লেখা - ', 'শামসুর রাহমান', 'নির্মলেন্দু গুণ', 'সৈয়দ শামসুল হক', 'আলাউদ্দীন আল আজাদ', 'a26'),
(27, 'বাংলা একাডেমী প্রাঙ্গণে অবস্থিত \'মোদের গরব\'\r\n ভাস্কর্যটির স্থপতি কে?', 'গোপাল চন্দ্র পাল', 'অখিল পাল', 'মৃণাল হক', 'শামীম সিকদার', 'a27'),
(28, 'শহীদ মিনার (জাহাঙ্গীরনগর বিশ্ববিদ্যালয়) এর উচ্চতা কত ফুট? ', '৪৮', '৫২', '৬৯', '৭১', 'a28'),
(29, '.‘বাংলা ভাষাকে রাষ্ট্রভাষা করার দাবি স্বীকার করিয়ে নেওয়ার জন্য প্রয়োজন হলে মেয়েরা তাদের রক্ত বিসর্জন দেবে।’ বক্তব্যটি কোন নারী ভাষা সৈনিকের?', 'মাহবুবা খাতুন', 'জাহানারা খাতুন', 'আনোয়ারা খাতুন', 'লায়লা নূর', 'a29'),
(30, 'মাতৃভাষা হিসেবে বিশ্ব-ভাষা তালিকায় বাংলার অবস্থান কততম?', 'চতুর্থ', 'পঞ্চম', 'সপ্তম', 'অষ্টম ', 'a30'),
(31, '\'আমার ভাইয়ের রক্তে রাঙানো\' গানটির প্রাতিষ্ঠানিক সুরকার কে? ', 'আবদুল গাফফার চৌধুরী', 'আলতাফ মাহমুদ', 'আবদুল লতিফ', 'শেখ লুৎফর রহমান', 'a31');

-- --------------------------------------------------------

--
-- Table structure for table `quizallans`
--

CREATE TABLE `quizallans` (
  `id` int(11) NOT NULL,
  `ar1` text NOT NULL,
  `ar2` text NOT NULL,
  `ar3` text NOT NULL,
  `ar4` text NOT NULL,
  `ar5` text NOT NULL,
  `ar6` text NOT NULL,
  `ar7` text NOT NULL,
  `ar8` text NOT NULL,
  `ar9` text NOT NULL,
  `ar10` text NOT NULL,
  `ar11` text NOT NULL,
  `ar12` text NOT NULL,
  `ar13` text NOT NULL,
  `ar14` text NOT NULL,
  `ar15` text NOT NULL,
  `ar16` text NOT NULL,
  `ar17` text NOT NULL,
  `ar18` text NOT NULL,
  `ar19` text NOT NULL,
  `ar20` text NOT NULL,
  `ar21` text NOT NULL,
  `ar22` text NOT NULL,
  `ar23` text NOT NULL,
  `ar24` text NOT NULL,
  `ar25` text NOT NULL,
  `ar26` text NOT NULL,
  `ar27` text NOT NULL,
  `ar28` text NOT NULL,
  `ar29` text NOT NULL,
  `ar30` text NOT NULL,
  `ar31` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizallans`
--

INSERT INTO `quizallans` (`id`, `ar1`, `ar2`, `ar3`, `ar4`, `ar5`, `ar6`, `ar7`, `ar8`, `ar9`, `ar10`, `ar11`, `ar12`, `ar13`, `ar14`, `ar15`, `ar16`, `ar17`, `ar18`, `ar19`, `ar20`, `ar21`, `ar22`, `ar23`, `ar24`, `ar25`, `ar26`, `ar27`, `ar28`, `ar29`, `ar30`, `ar31`) VALUES
(1, '2', '2', '3', '3', '1', '1', '1', '1', '2', '1', '3', '1', '1', '2', '4', '1', '2', '4', '4', '4', '3', '3', '2', '1', '1', '1', '2', '4', '1', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `quizans`
--

CREATE TABLE `quizans` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL,
  `a8` text NOT NULL,
  `a9` text NOT NULL,
  `a10` text NOT NULL,
  `a11` text NOT NULL,
  `a12` text NOT NULL,
  `a13` text NOT NULL,
  `a14` text NOT NULL,
  `a15` text NOT NULL,
  `a16` text NOT NULL,
  `a17` text NOT NULL,
  `a18` text NOT NULL,
  `a19` text NOT NULL,
  `a20` text NOT NULL,
  `a21` text NOT NULL,
  `a22` text NOT NULL,
  `a23` text NOT NULL,
  `a24` text NOT NULL,
  `a25` text NOT NULL,
  `a26` text NOT NULL,
  `a27` text NOT NULL,
  `a28` text NOT NULL,
  `a29` text NOT NULL,
  `a30` text NOT NULL,
  `a31` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `totalmarks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `step1` varchar(10) NOT NULL,
  `marks1` int(10) NOT NULL,
  `selectionround2` varchar(10) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL,
  `marks2` int(10) NOT NULL,
  `selectionround3` varchar(10) NOT NULL,
  `time` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `marks3` int(10) NOT NULL,
  `questart` varchar(20) NOT NULL,
  `quend` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `sw_type` varchar(100) NOT NULL,
  `switch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sw_type`, `switch`) VALUES
(1, 'result_publish', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `timer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `timer`) VALUES
(1, '12:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option1`);

--
-- Indexes for table `quizallans`
--
ALTER TABLE `quizallans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizans`
--
ALTER TABLE `quizans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `quizallans`
--
ALTER TABLE `quizallans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quizans`
--
ALTER TABLE `quizans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
