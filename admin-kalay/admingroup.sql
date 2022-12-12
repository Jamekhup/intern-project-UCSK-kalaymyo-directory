-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 09:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admingroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Email` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(190) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(2, 'kalaydirectory2020@gmail.com', 'c39d0c3ce8a618834c75d1c1db58db6e');

-- --------------------------------------------------------

--
-- Table structure for table `admin_category`
--

CREATE TABLE `admin_category` (
  `id` int(11) NOT NULL,
  `AdminName` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `AdminEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AdminPassword` varchar(190) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_category`
--

INSERT INTO `admin_category` (`id`, `AdminName`, `AdminEmail`, `AdminPassword`) VALUES
(1, 'asdfas', '', 'asfdfas'),
(2, '5wqeojr9wqeruew', 'wersew@gmail.com', '5d5236fd164a323e3ea9b1bd68d65f2f'),
(3, 'asdfghj', 'mm@gmail.com', '06bc6b169e3a50379fc05ad7afa7bb7a'),
(4, 'Pan Eii', 'mm@gmail.com', 'a609654afef260b27d52bc70d36a6680'),
(5, 'Michael', 'mm@gmail.com', 'fe0f71cae0b2676f418efd334655ed78'),
(6, 'Michaeldfdshhfdsgdf', 'mm@gmail.com', 'f1a32be222b9fdb69739b7ad7b589c84'),
(7, 'Pan ei NNA', 'yy@gmail.com', 'c76e4f8862ed7619abdc6e6157cfcb91');

-- --------------------------------------------------------

--
-- Table structure for table `create_category`
--

CREATE TABLE `create_category` (
  `id` int(11) NOT NULL,
  `Name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(190) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `create_category`
--

INSERT INTO `create_category` (`id`, `Name`, `Address`) VALUES
(1, 'rtyr', 'ysre'),
(4, 'Marketing Fields', 'Taungzalat, Kalemyo'),
(5, 'Myanmar ', 'Kala'),
(6, 'travel', 'dxfcgh');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `Name`, `Address`, `PhoneNumber`, `Category`, `Image`, `Description`, `Created_at`) VALUES
(53, 'michael', 'taungzalat', '09400584263', 'Myanmar ', 'FeatureImage/FB_IMG_1525678482405.jpg', '                                       \\r\\n                dgsdafsadfsa', '2020-08-24 07:14:02'),
(54, 'MichaelZani', 'taungzalat777', '09400584263', 'Marketing Fields', 'FeatureImage/background.jpg', '                                       \\r\\n                1234', '2020-08-24 07:47:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_category`
--
ALTER TABLE `admin_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_category`
--
ALTER TABLE `create_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_category`
--
ALTER TABLE `admin_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `create_category`
--
ALTER TABLE `create_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
