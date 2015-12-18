-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 07:47 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crashzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_out` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estimator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rego` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `badge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `colour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `owner`, `address`, `mobile`, `phone`, `fax`, `email`, `quote`, `date_in`, `date_out`, `estimator`, `rego`, `dom`, `make`, `model`, `series`, `badge`, `colour`, `rr`, `created_at`, `updated_at`) VALUES
(1, 'CHunter', 'Da nang Viet Nam', '0911111111', '123123123', '123123', 'abc@gmail.com', '', '', '', 'asdasd', '123123', '', '23123', 'AB', '123', '', 'Blue', '', '2015-12-13 21:28:08', '2015-12-14 01:36:29'),
(2, 'Trong Tran', 'ASDASD', '123123', '123123', '123123', '123123', '', '', '', '', '123', '123', 'AB', '7676', '2323', '', 'Violet', '23', '2015-12-13 21:28:22', '2015-12-13 21:30:14'),
(3, 'Tien Anh', 'Le thach', '091231231', '124123123123', '123123', 'tienanh@gmail.com', 'asd', 'asd', 'sd', 'asd', '6666', '123', 'Suziki', 'Mjhghasd', '213', '123', 'red', '', '2015-12-13 23:31:02', '2015-12-13 23:32:23'),
(4, 'asdas', 'asd', 'dasd', 'dasd', 'dasas', '', '', '', '', '', '123123', '', 'asdasd', 'wqe', 'qweqwweqweqwe', '', 'eqweq', '', '2015-12-14 01:11:47', '2015-12-14 01:38:29'),
(5, 'Chunter', 'America', '123', '123', '123', 'cena@gmail.com', '', '', '', '', '213123', '123', 'Japan', '123', 'h4', '', 'red', '', '2015-12-14 01:11:48', '2015-12-15 02:00:57'),
(6, 'Triple H', 'Australia', '213123', '123123213', '123123', 'gammer@mlasld.com', '', '', '', '', '123123', '', 'Suzuki', '123', '12312', '', 'blue', '', '2015-12-14 01:11:50', '2015-12-14 01:53:35'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-12-14 01:11:52', '2015-12-14 01:11:52'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-12-14 01:11:55', '2015-12-14 01:11:55'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-12-14 01:11:57', '2015-12-14 01:11:57'),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-12-14 01:11:59', '2015-12-14 01:11:59'),
(11, 'Garena 3', 'DN', '123123', '123123123', '1231231', 'sdasd@gmail.com', '1', '', '', '', '213213', '', 'qweqwe', 'qweqw', 'qwe', '', 'red', '22', '2015-12-14 01:12:00', '2015-12-14 19:13:30'),
(12, 'Yan new 43', 'asdasdnnn', 'kmsdsd', 'mkasdmmsd', 'masmdmsadm', 'msdmasdm', 'msdmasmd', 'masdmasmd', 'msdmasd', 'masmdamsd', '12323asdnbn', 'ghgh', 'vbvbnvbnsaddas', 'cvbsd', 'cvbcvb', 'vbnvbn', 'vbnbvn', 'vbn', '2015-12-14 19:13:15', '2015-12-14 20:31:27'),
(13, 'Tien Dung Lkk', '76445', '0988777223', '09456456457', 'cbncb', 'fgh', '', '', '', '', '5467', '1231', 'Japan', 'yamaha', 'Suzuki', 'No1', 'red', '', '2015-12-14 23:14:52', '2015-12-15 23:18:53'),
(16, 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-12-16 01:11:40', '2015-12-16 19:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_14_011852_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
