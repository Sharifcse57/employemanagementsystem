-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2016 at 05:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `remember_token`, `role_id`) VALUES
(4, 'admin', '$2y$10$BVwuygL0a0YWF.lRSUaGM.EwQMPaBOGDyASDqls/ip6.ljQP5nBG.', '2MMUSK3buJaxHSFOLigly528fAutTbrTClMGycKESd12977hCFVXmPYr3MvT', NULL),
(5, 'sharif', '$2y$10$6VmOhmfOFnep4Osi38/FtOZqohCu1CYqxyjK7SMM8OMgKP13AT5xe', 'aAAlj81J033qvQKQDPhiohpHYuIwQa0W9hMSNDXGUBlDYBFkEcXQhv971psX', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`) VALUES
(2, 'Software engineer'),
(9, 'Maneger'),
(15, 'MD'),
(16, 'Junior Software Engineer'),
(17, 'Senior Software Engineer'),
(19, 'CO'),
(20, 'CEO'),
(21, 'System analyst');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `paygrade_id` int(10) UNSIGNED NOT NULL,
  `joindate` date NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `password`, `remember_token`, `fullname`, `designation_id`, `email`, `images`, `phone`, `address`, `paygrade_id`, `joindate`, `active`) VALUES
(16, 'afroja', '$2y$10$X9.O.nKiCDkIVF0aMJqShuaZazncWXo/AVbLvxVPzrdJ.8F.wys1O', '2VZsh0FWEmX1mins7TJXPBQPh6aYfwlU4uxZrKQx0UYKEPY0LrdLUQtOFEep', 'afroja', 20, 'as@gmail.com', '1481984605.jpg', '232352345', 'dgdgsd', 1, '2016-12-02', 1),
(17, 'Mahfuz', '$2y$10$SMJdruJHFGEkSvm/1JsU8ue5shNq4vXorrb6I9luLfDHl/EOi/iEK', '3ADSOqHf9Pipuu1C6ewEMMiIAW83Dh3nbQwxM5PyNk0nPVgjTCHXvZY0jyQF', 'Mahfuz rahman', 17, 'mahfuz714@gmail.com', '1482229050.png', '01725234523', 'sector 4,road 11,house 44,dhaka 1230', 3, '2016-12-16', 1),
(23, 'azmi', '$2y$10$enK845/Dkh422VDBo8lsuu9sK.ZLemDGlAwfAXfO8.PecKRPYQXdm', 'ExLvhe2OMBCA22AIhTLrHpZmt0vt7N6FmhRf0ypGn8BkWLZJaVjIvXIImIO7', 'azmi khan', 9, 'azmi@yahoo.com', '1482049345.jpg', '0155234234', 'sector 10,road 11,house 62,dhaka 1230', 3, '2016-12-21', 1),
(28, 'shamim', '$2y$10$ECqYn3UNlvgmFSiaItjuQ.rmgJzU1oUL2wjvq3BF3iiWoQmuDA/c6', 'yP3XoEPiM6dVExeMTDXqotpzvc1oiTX4hDzwqDKOnb2xGLtIpRJTXI5mR6FM', 'Shamim ahmed', 9, 'shamim@gmail.com', '1482333843.jpg', '01715121450', '', 3, '2016-12-01', 1),
(29, 'sharif', '$2y$10$3MqloO8BbfH.QBkwGCN8a.ynLNK7OzGJqoPmIkvvzENd2xSfyW2Ru', 'wOdoF7roQdCqQZw2vocxUD8BpPn7bET71WIgDaUruUhHlmO23CqDup12Flg1', 'Md shariful islam ', 2, 'sharif114200@yahoo.com', '1482658053.jpg', '01723438958', '', 2, '2016-12-23', 1),
(30, 'sabbir', '$2y$10$DmaBuxMwKI4oskJ09g.JVurtGDd00aUc14iQF0LCu0t2XgIBc7RO6', 'q3pxJbEBNc3VH5JtdoyJsX2mR1Y6KXxg4r4L2AEcBXAzHO1iTijTqS1SiTcf', 'Sabbir ahmed Niscop', 17, 'sabbir@yahoo.com', '1482658136.jpg', '0178548758', '', 3, '2016-12-19', 1),
(31, 'jewel', '$2y$10$6HsS9ziY71lQwRtdS8I4pOdPzretg6FttuAkEJjdXY4kSxeSJhCHK', 'jWmqOh1ieydyDNznHlCJLd6C6pmO27EnjPlSYdWMTH9YJezTlrKx7nqMAyGw', 'Jewel rahman', 16, 'jewel@gmail.com', '1482658205.jpg', '01723458965', 'sector 10,road 11,house 62,dhaka 1230', 5, '2016-12-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_form` date NOT NULL,
  `leave_to` date NOT NULL,
  `descrtiption` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `leave_form`, `leave_to`, `descrtiption`, `status`) VALUES
(20, 16, '2016-12-21', '2016-12-24', '&lt;p&gt;Anonymous: Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies. I would like to thank the management with all my heat for the continuous supporting given to me. Yours Sincerely, Shazra Shakir Assistant Manager, Marketing&lt;/p&gt;\r\n', 1),
(21, 16, '2016-12-22', '2016-12-30', '&lt;p&gt;Anonymous: Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 2),
(22, 28, '2016-12-23', '2016-12-31', '&lt;p style=&quot;text-align:center&quot;&gt;&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 1),
(23, 23, '2016-12-08', '2016-12-23', '&lt;p&gt;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 2),
(24, 17, '2016-12-01', '2016-12-06', '&lt;p&gt;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 2),
(25, 17, '2016-12-07', '2016-12-15', '&lt;p&gt;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studiesSunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 1),
(26, 23, '2016-12-15', '2016-12-29', '&lt;p&gt;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&lt;/p&gt;\r\n', 1),
(27, 29, '2016-12-21', '2016-12-27', '&lt;p&gt;for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studiesSunday, 26 July 2006&nbsp;&lt;/p&gt;\r\n', 1),
(28, 17, '2016-12-26', '2016-12-28', '&lt;p&gt;for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006&lt;/p&gt;\r\n', 1),
(30, 31, '2016-12-26', '2016-12-28', '&lt;p&gt;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave Dear Sir, As per to the discussion with you regarding the, my examination, I would like to inform you that I need off on everyday after 2:30pm from the date 27th&nbsp;December 2006 to 8thDecember 2006 for my studies&nbsp;Sunday, 26 July 2006 (personal information removed by moderator) Sub: Requesting for leave&lt;/p&gt;\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_10_28_125123_create_roles_table', 1),
(2, '2016_10_28_125317_create_admins_table', 2),
(3, '2016_10_28_130748_create_role_actions_table', 3),
(4, '2016_10_28_132002_create_actions_table', 3),
(5, '2016_10_28_132146_create_roleactions_table', 4),
(6, '2016_10_28_132347_create_designations_table', 5),
(7, '2016_10_28_132447_create_paygrades_table', 6),
(8, '2016_10_28_132641_create_payitems_table', 7),
(9, '2016_10_28_132743_create_salarys_table', 8),
(10, '2016_10_28_132940_create_employees_table', 9),
(11, '2016_10_28_133201_create_paymenthistorys_table', 10),
(12, '2016_10_28_133359_create_paymentdetails_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `paygrades`
--

CREATE TABLE `paygrades` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `paygrade_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `basic` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paygrades`
--

INSERT INTO `paygrades` (`id`, `designation_id`, `paygrade_name`, `basic`, `status`) VALUES
(1, 2, 'Grade One', 70000, 0),
(2, 9, 'Grade Two', 60000, 0),
(3, 9, 'Grade Three', 50000, 0),
(4, 9, 'Grade Four', 40000, 0),
(5, 2, 'Grade Five', 30000, 0),
(6, 17, 'Grade Six', 20000, 0),
(7, 15, 'Grade Seven', 15000, 0),
(8, 17, 'Grade Eight', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payitems`
--

CREATE TABLE `payitems` (
  `id` int(10) UNSIGNED NOT NULL,
  `payitem` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payitems`
--

INSERT INTO `payitems` (`id`, `payitem`) VALUES
(1, 'home rent'),
(5, 'Health'),
(6, 'Transport'),
(7, 'Extras');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `paymenthistory_id` int(10) UNSIGNED NOT NULL,
  `payitem_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtruction` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistories`
--

CREATE TABLE `paymenthistories` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `basic` int(11) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `additional_total` double(8,2) NOT NULL,
  `substruction_total` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paymenthistories`
--

INSERT INTO `paymenthistories` (`id`, `employee_id`, `designation_id`, `basic`, `sub_total`, `additional_total`, `substruction_total`, `grand_total`, `description`, `payment_date`) VALUES
(9, 17, 17, 30000, 39500.00, 9500.00, 0, 39500, 'good', '2016-12-17'),
(10, 10, 2, 60000, 76500.00, 16500.00, 500, 76000, 'good', '2016-12-17'),
(11, 15, 17, 60000, 76500.00, 16500.00, 500, 76000, 'nothing', '2016-12-17'),
(12, 24, 20, 70000, 75600.00, 5600.00, 0, 75600, '', '2016-12-20'),
(13, 25, 16, 50000, 53000.00, 3000.00, 3000, 50000, 'adsfafasdf', '2016-12-20'),
(14, 16, 20, 70000, 75600.00, 5600.00, 63504, 12096, 'Only 4 day attendance', '2016-12-21'),
(15, 17, 17, 50000, 53000.00, 3000.00, 50880, 2120, 'asdfasdf', '2016-12-21'),
(16, 17, 17, 50000, 53000.00, 3000.00, 48760, 4240, 'Only two days attended', '2016-12-22'),
(17, 23, 9, 50000, 53000.00, 3000.00, 48760, 4240, '', '2016-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistorys`
--

CREATE TABLE `paymenthistorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `basic` int(11) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `additional_total` double(8,2) NOT NULL,
  `substruction_total` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roleactions`
--

CREATE TABLE `roleactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `action_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'maneger');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `payitem_id` int(10) UNSIGNED NOT NULL,
  `paygrade_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `payitem_id`, `paygrade_id`, `amount`) VALUES
(37, 1, 3, 1500),
(38, 5, 3, 500),
(39, 6, 3, 600),
(40, 7, 3, 400),
(143, 1, 5, 5000),
(144, 5, 5, 1500),
(145, 6, 5, 2000),
(146, 7, 5, 500),
(147, 11, 5, 500),
(180, 1, 2, 6000),
(181, 5, 2, 4500),
(182, 6, 2, 3000),
(183, 7, 2, 3000),
(192, 1, 1, 5000),
(193, 5, 1, 1400),
(194, 6, 1, 1400),
(195, 7, 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `description` text,
  `entry_date` date DEFAULT NULL,
  `entry_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `employee_id`, `description`, `entry_date`, `entry_time`) VALUES
(4, 17, '', '2016-12-17', '02:45:51'),
(5, 16, '', '2016-12-21', '11:06:54'),
(12, 27, '', '2016-12-21', '09:18:16'),
(14, 28, 'today is my first day', '2016-12-21', '09:40:52'),
(15, 23, '', '2016-12-22', '11:44:15'),
(16, 17, '', '2016-12-22', '11:44:59'),
(17, 16, '', '2016-12-22', '03:08:41'),
(18, 16, '', '2016-12-25', '12:23:50'),
(19, 29, 'This is my first day', '2016-12-25', '03:47:19'),
(20, 23, '', '2016-12-25', '12:28:45'),
(21, 30, '', '2016-12-25', '12:46:49'),
(22, 17, '', '2016-12-25', '08:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_designation_id_foreign` (`designation_id`),
  ADD KEY `employees_paygrade_id_foreign` (`paygrade_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paygrades`
--
ALTER TABLE `paygrades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paygrades_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `payitems`
--
ALTER TABLE `payitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentdetails_paymenthistory_id_foreign` (`paymenthistory_id`),
  ADD KEY `paymentdetails_payitem_id_foreign` (`payitem_id`);

--
-- Indexes for table `paymenthistories`
--
ALTER TABLE `paymenthistories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymenthistorys_employee_id_foreign` (`employee_id`),
  ADD KEY `paymenthistorys_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `paymenthistorys`
--
ALTER TABLE `paymenthistorys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymenthistorys_employee_id_foreign` (`employee_id`),
  ADD KEY `paymenthistorys_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `roleactions`
--
ALTER TABLE `roleactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleactions_role_id_foreign` (`role_id`),
  ADD KEY `roleactions_action_id_foreign` (`action_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salarys_payitem_id_foreign` (`payitem_id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `paygrades`
--
ALTER TABLE `paygrades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payitems`
--
ALTER TABLE `payitems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paymenthistories`
--
ALTER TABLE `paymenthistories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `paymenthistorys`
--
ALTER TABLE `paymenthistorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roleactions`
--
ALTER TABLE `roleactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `employees_paygrade_id_foreign` FOREIGN KEY (`paygrade_id`) REFERENCES `paygrades` (`id`);

--
-- Constraints for table `paygrades`
--
ALTER TABLE `paygrades`
  ADD CONSTRAINT `paygrades_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`);

--
-- Constraints for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD CONSTRAINT `paymentdetails_payitem_id_foreign` FOREIGN KEY (`payitem_id`) REFERENCES `payitems` (`id`),
  ADD CONSTRAINT `paymentdetails_paymenthistory_id_foreign` FOREIGN KEY (`paymenthistory_id`) REFERENCES `paymenthistorys` (`id`);

--
-- Constraints for table `paymenthistorys`
--
ALTER TABLE `paymenthistorys`
  ADD CONSTRAINT `paymenthistorys_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `paymenthistorys_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `roleactions`
--
ALTER TABLE `roleactions`
  ADD CONSTRAINT `roleactions_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `roleactions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
