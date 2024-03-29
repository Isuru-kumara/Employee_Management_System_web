-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 06:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `department_name`, `added_on`) VALUES
(1, 'Human Resources', '2021-05-27 15:34:10'),
(2, 'Back-End Development', '2021-05-27 15:22:55'),
(3, 'Designing', '2019-10-04 05:25:15'),
(4, 'Front-End Development', '2021-05-27 13:53:48'),
(5, 'Marketing', '2021-05-27 16:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `pic` varchar(150) NOT NULL DEFAULT 'default-pic.jpg',
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`id`, `employee_name`, `gender`, `email`, `mobile`, `dob`, `doj`, `address`, `city`, `state`, `country`, `department_id`, `pic`, `added_by`, `updated_on`, `added_on`) VALUES
(2, 'Steven Askew', 'Male', 'steven@gmail.com', 7444440001, '1990-02-18', '2020-11-27', '3721  Hill Croft Farm Road', 'BURLINGTON', 'MI', 'United States', 1, 'smportrait.jpg', 0, '0000-00-00', '2021-05-27 15:37:03'),
(3, 'Tatiana Breit', 'Female', 'tatiana@gmail.com', 7402222220, '1994-10-14', '2021-02-21', '3397  Happy Hollow Road', 'Jacksonville', 'NC', 'United States', 2, 'prtwm.jpg', 0, '0000-00-00', '2021-05-27 15:37:16'),
(4, 'Christine Moore', 'Female', 'christine@gmail.com', 8888877777, '1994-08-01', '2020-01-15', '4047  Timbercrest Road', 'Anchorage', 'AK', 'United States', 3, 'christen-freeimg.jpg', 0, '0000-00-00', '2021-05-27 15:31:20'),
(5, 'Liam Moore', 'Male', 'liam@gmail.com', 7410233333, '1994-12-02', '2021-04-04', '3474  Viking Drive', 'Worthington', 'OH', 'United States', 4, '7002489_preview.jpg', 1, '0000-00-00', '2021-05-27 13:55:22'),
(6, 'George J Barnes', 'Male', 'barnes@gmail.com', 1010101010, '1988-02-03', '2021-01-13', '3079  Chardonnay Drive', 'Ocala', 'FL', 'United States', 2, 'skport.jpg', 1, '0000-00-00', '2021-05-27 15:28:48'),
(7, 'Samuel Huntsman', 'Male', 'samuel@gmail.com', 7410000010, '1991-12-28', '2021-04-25', '2315  Cherry Tree Drive', 'Jacksonville', 'FL', 'United States', 5, 'dportrait.jpg', 1, '0000-00-00', '2021-05-27 16:52:18'),
(8, 'Mark Heiden', 'Male', 'markh@gmail.com', 7070707069, '1990-02-12', '2021-02-04', '2190  Laurel Lane', 'Midland', 'TX', 'United States', 2, 'pauptr.jpg', 1, '0000-00-00', '2021-05-27 16:53:57'),
(9, 'Angela Bridges', 'Female', 'angela@gmail.com', 7417417417, '1992-02-11', '2021-03-05', '3538 Melville Street', 'Jackson', 'TN', 'United States', 6, 'sm-freeimg.jpg', 1, '0000-00-00', '2021-05-27 17:29:36'),
(10, 'isuru kolongahapitiya', 'Male', 'isuru@gmail.com', 765551064, '1999-05-15', '2024-01-20', 'A/3, Walgama, Yatagama, Rambukkana', 'Kegalle', 'Rambukkana', 'Sri Lanka', 4, '169458951.jpg', 1, '0000-00-00', '2024-01-19 21:00:48'),
(11, 'Teshan Wijewardhana', 'Male', 'teshanwijewardhana@gmail.com', 712583072, '2000-07-19', '2024-01-28', '712/10/18, Romiyel Street, Homagama.', 'Homagama', 'Western', 'Sri Lanka', 4, 'photo1.png', 1, '0000-00-00', '2024-01-28 14:00:43'),
(12, 'Pemini Imasha', 'Female', 'pemini139@gmail.com', 701971625, '2000-11-22', '2016-12-18', '195/2 hokandara south', 'colombo', 'western', 'Sri Lanka', 1, 'default-pic.jpg', 1, '0000-00-00', '2024-01-31 14:49:56');


-- --------------------------------------------------------

--
-- Table structure for table `events_demo`
--

CREATE TABLE `events_demo` (
  `id` int(11) NOT NULL,
  `bdo` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `t_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events_demo`
--

INSERT INTO `events_demo` (`id`, `bdo`, `email`, `title`, `color`, `start`, `end`, `status`, `t_stamp`) VALUES
(220, 'bnec', 'bench@gmail.com', 'sample appointment', '#008000', '2019-08-29 09:05:00', '2019-08-29 09:10:00', 1, '2019-08-29 08:56:24'),
(221, '', '', 'sample', '#FF0000', '2019-08-29 00:00:00', '2019-08-30 00:00:00', NULL, '2019-08-29 08:57:52'),
(223, '', '', 'meeting with client', '##FF8C00', '2019-08-22 00:00:00', '2019-08-23 00:00:00', NULL, '2019-08-29 08:58:08'),
(224, '', '', 'meeting with employee', '#008000', '2019-08-29 00:00:00', '2019-08-30 00:00:00', NULL, '2019-08-29 08:58:19'),
(225, '', '', 'meeting with managers', '#008000', '2019-08-29 00:00:00', '2019-08-30 00:00:00', NULL, '2019-08-29 08:58:31'),
(226, '', '', 'meeting with executives', '#008000', '2019-08-29 00:00:00', '2019-08-30 00:00:00', NULL, '2019-08-29 08:58:40'),
(227, '', '', 'Sample', '#008000', '2019-08-21 12:00:00', '2019-08-21 13:00:00', NULL, '2019-08-30 02:45:49'),
(228, '', '', 'QWEQWE', '##FF8C00', '2019-08-01 00:00:00', '2019-08-02 00:00:00', NULL, '2019-08-30 02:58:41'),
(230, '', '', 'QWEW', '#FF8C00', '2019-08-09 00:00:00', '2019-08-10 00:00:00', NULL, '2019-08-30 02:59:26'),
(231, '', '', 'EWEW', '#FF0000', '2019-08-14 00:00:00', '2019-08-15 00:00:00', NULL, '2019-08-30 02:59:56'),
(232, '', '', 'QWEWEW', '##FF8C00', '2019-08-16 00:00:00', '2019-08-17 00:00:00', NULL, '2019-08-30 03:00:02'),
(233, '', '', 'bench', '#008000', '2019-08-07 09:00:00', '2019-08-08 12:00:00', NULL, '2019-08-30 03:00:55'),
(234, '', '', 'S', '##FF8C00', '2019-08-06 00:00:00', '2019-08-07 00:00:00', NULL, '2019-08-30 03:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_reason` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `updated_on` date NOT NULL,
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`id`, `employee_id`, `leave_reason`, `description`, `status`, `leave_from`, `leave_to`, `updated_on`, `applied_on`) VALUES
(1, 2, 'Sick', 'Not feeling well enough to join', 1, '2021-01-15', '2021-01-17', '0000-00-00', '2021-01-15'),
(2, 5, 'Casual Leave', 'been working for full hours since last month, got to free my mind for few days', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(3, 6, 'Day Off', 'Requesting for a day off as I need to join my pal\'s wedding!', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(4, 3, 'Casual Leave', 'for vacation, rest, and family events', 2, '2021-05-30', '2021-06-06', '0000-00-00', '2021-05-27'),
(5, 9, 'Quarantine', 'i need to quarantine myself for few weeks as i got some symptoms of covid-19', 1, '2021-05-28', '2021-06-11', '0000-00-00', '2021-05-27'),
(6, 5, 'nikan', 'bnhmjklikkkjjh', 2, '2024-01-20', '2024-01-27', '0000-00-00', '2024-01-19'),
(7, 12, '', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', '2024-02-06'),
(8, 12, 'blaldkijcu', 'eelelelelll', 0, '2023-01-11', '2023-11-11', '0000-00-00', '2024-02-06'),
(9, 12, '', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', '2024-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 1, 1),
(2, 'steven@gmail.com', '7444440001', 2, 1),
(3, 'tatiana@gmail.com', '7402222220', 2, 1),
(4, 'christine@gmail.com', '8888877777', 2, 1),
(5, 'liam@gmail.com', '7410233333', 2, 1),
(6, 'barnes@gmail.com', '1010101010', 2, 1),
(7, 'samuel@gmail.com', '7410000010', 2, 1),
(8, 'markh@gmail.com', '7070707069', 2, 1),
(9, 'angela@gmail.com', '7417417417', 2, 1),
(10, 'isuru', '1234', 2, 1),
(11, 'teshanwijewardhana@gmail.com', '0712583072', 2, 1),
(12, 'pemini139@gmail.com', '0701971625', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_rss`
--

CREATE TABLE `member_rss` (
  `member_id` int(11) NOT NULL,
  `member_first` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


--
-- Dumping data for table `member_rss`
--

INSERT INTO `member_rss` (`member_id`, `member_first`, `username`, `password`, `email`, `role`, `status`) VALUES
(5, 'user', 'user', 'user', 'braquino@primus.com.ph', 'user', 1),
(6, 'admin', 'admin', 'admin', '', 'admin', 1),
(7, 'amara', 'amara', 'amara', 'amara@gmail.com', 'user', 1),
(8, 'ETTALUCOD', 'ETTALUCOD', 'ETTALUCOD', '', 'admin', 1),
(9, 'asberceles', 'asberceles', 'asberceles', 'braquino@primus.com.ph', 'user', 1),
(10, 'sbborja', 'sbborja', 'sbborja', 'sbborja@primus.com.ph', 'user', 1),
(11, 'bnec', 'bench', 'bench', 'bench@gmail.com', '', 1),
(12, 'bebeb', 'ebeb', 'ebeb', 'ebebe@gmail', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reqletter_tbl`
--

CREATE TABLE `reqletter_tbl` (
  `id` int(200) NOT NULL,
  `emp_name` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reqletter_tbl`
--

INSERT INTO `reqletter_tbl` (`id`, `emp_name`, `file_name`, `upload_date`) VALUES
(1, '11451', 'Chief_Manager1.pdf', '2024-02-13 14:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `request_tbl`
--

CREATE TABLE `request_tbl` (
  `FullName` text NOT NULL,
  `EmployeeID` int(200) NOT NULL,
  `DateJoining` date NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_tbl`
--

INSERT INTO `request_tbl` (`FullName`, `EmployeeID`, `DateJoining`, `Email`, `Department`, `Address`, `Status`) VALUES
('Pemini Imasha', 11451, '2024-01-02', 'pe@gmail.com', '', '282/A, Vidyaraja mawatha\r\nHokandara south', 0),
('uvini', 12345, '2011-11-11', 'uv@gmail.com', '', '1 welimada', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary_tbl`
--

CREATE TABLE `salary_tbl` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `basic_salary` bigint(20) NOT NULL,
  `allowance` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salary_tbl`
--

INSERT INTO `salary_tbl` (`id`, `employee_id`, `basic_salary`, `allowance`, `total`, `added_by`, `updated_on`, `added_on`) VALUES
(1, 2, 14000, 0, 14000, 1, '0000-00-00', '2021-05-02 08:23:30'),
(2, 3, 9100, 300, 9400, 1, '0000-00-00', '2021-04-28 02:39:23'),
(3, 4, 4950, 0, 4950, 1, '0000-00-00', '2021-04-30 07:38:02'),
(4, 5, 6100, 250, 6350, 1, '0000-00-00', '2021-04-30 13:57:02'),
(5, 9, 4750, 190, 4940, 1, '0000-00-00', '2021-05-27 17:31:05'),
(6, 5, 25000, 2500, 27500, 1, '0000-00-00', '2024-01-19 21:01:53'),
(7, 10, 50000, 10000, 60000, 1, '0000-00-00', '2024-01-19 21:01:53'),
(8, 5, 10000, 12000, 22000, 1, '0000-00-00', '2024-01-20 06:54:53'),
(9, 10, 24000, 10000, 34000, 1, '0000-00-00', '2024-01-20 06:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_demo`
--
ALTER TABLE `events_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_rss`
--
ALTER TABLE `member_rss`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `reqletter_tbl`
--
ALTER TABLE `reqletter_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tbl`
--
ALTER TABLE `request_tbl`
  ADD PRIMARY KEY (`EmployeeID`);

--

-- Indexes for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_tbl`
--
ALTER TABLE `country_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events_demo`
--
ALTER TABLE `events_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- AUTO_INCREMENT for table `member_rss`
--
ALTER TABLE `member_rss`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reqletter_tbl`
--
ALTER TABLE `reqletter_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_tbl`
--
ALTER TABLE `request_tbl`
  MODIFY `EmployeeID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
