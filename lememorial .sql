-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lememorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`userid`, `name`, `email`, `password`, `cpassword`, `user_type`) VALUES
(1, 'Big Programmer', 'tempbag@gmail.com', 'c355430ed24aad5bd4e64525bb8b8158', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bigreg`
--

CREATE TABLE `bigreg` (
  `id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` varchar(3) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `address` varchar(205) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `dateofad` date NOT NULL,
  `doctor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bigreg`
--

INSERT INTO `bigreg` (`id`, `name`, `age`, `sex`, `bloodgroup`, `address`, `contactno`, `dateofad`, `doctor`) VALUES
('00473', 'Barigye Innocent', '36', 'male', 'AB', 'Rwebikona, Mbarara city', '783492030', '2023-01-14', 'Dr Ronah'),
('N20200002', 'Tresa', '27', 'female', 'O+', '54645', '8989898989', '2021-03-27', 'Dr. Angella'),
('N20211', 'Tresa', '55', 'female', 'B-', 'HJKKHKJHKHKH', '7125874521', '2021-01-19', 'Dr. Magoba'),
('N20213', 'David', '65', 'female', 'O+', 'kjlkjl', '9875633214', '2021-01-20', 'Dr. Ambrose');

-- --------------------------------------------------------

--
-- Table structure for table `casroom`
--

CREATE TABLE `casroom` (
  `id` varchar(10) NOT NULL,
  `roomno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `casualty`
--

CREATE TABLE `casualty` (
  `id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`) VALUES
(6, 'Jias Isaac', 'jias@gmail.com', '7849029452', '2023-03-31 00:00:00'),
(7, '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deletetable`
--

CREATE TABLE `deletetable` (
  `id` varchar(10) NOT NULL,
  `indate` date NOT NULL,
  `outdate` date NOT NULL,
  `department` varchar(25) NOT NULL,
  `count` int(30) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deletetable`
--

INSERT INTO `deletetable` (`id`, `indate`, `outdate`, `department`, `count`, `rate`) VALUES
('N20211', '2021-01-19', '2021-01-20', 'Casualty', 1, 2000),
('N20211', '2021-01-22', '2021-01-23', 'ICU', 1, 2000),
('N20211', '2021-01-30', '2021-01-23', 'Casualty', 7, 14000),
('N20212', '2021-01-20', '2021-01-28', 'ICU', 8, 16000),
('N20213', '2021-01-20', '2021-01-23', 'ICU', 3, 6000),
('N20213', '2021-01-27', '2021-02-06', 'Casualty', 10, 20000),
('N20200002', '2021-03-27', '2021-04-11', 'ICU', 15, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groom`
--

CREATE TABLE `groom` (
  `id` varchar(10) NOT NULL,
  `roomno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `icu`
--

CREATE TABLE `icu` (
  `id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `icuroom`
--

CREATE TABLE `icuroom` (
  `id` varchar(10) NOT NULL,
  `roomno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patientreg`
--

CREATE TABLE `patientreg` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `address` varchar(205) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `dateofad` date NOT NULL,
  `doctor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientreg`
--

INSERT INTO `patientreg` (`id`, `name`, `age`, `sex`, `bloodgroup`, `address`, `contactno`, `dateofad`, `doctor`) VALUES
('00783', 'Muyinza Elvis', '26', 'Male', 'B+', 'Kiswahili Mbarara', '726501715', '2023-02-13', 'Dr.Magoba'),
('00889', 'Daisy Linda', '56', 'female', 'O+', 'Katete Mbarara', '789425815', '2023-08-12', 'Dr.Evarist');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `department`, `shift`) VALUES
('', '', 'General', ''),
('icu001', 'Magoba', 'Icu', 'Evening'),
('icu002', 'Angella', 'Icu', 'Evening');

-- --------------------------------------------------------

--
-- Table structure for table `totalroom`
--

CREATE TABLE `totalroom` (
  `roomno1` int(4) NOT NULL,
  `section` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalroom`
--

INSERT INTO `totalroom` (`roomno1`, `section`) VALUES
(100, 'GENERALROOM'),
(101, 'GENERALROOM'),
(102, 'GENERALROOM'),
(103, 'GENERALROOM'),
(104, 'GENERALROOM'),
(105, 'GENERALROOM'),
(106, 'GENERALROOM'),
(107, 'GENERALROOM'),
(108, 'GENERALROOM'),
(109, 'GENERALROOM'),
(110, 'GENERALROOM'),
(200, 'ICU BED'),
(201, 'ICU BED'),
(202, 'ICU BED'),
(203, 'ICU BED'),
(204, 'ICU BED'),
(205, 'ICU BED'),
(206, 'ICU BED'),
(207, 'ICU BED'),
(208, 'ICU BED'),
(209, 'ICU BED'),
(210, 'ICU BED'),
(300, 'VIP'),
(301, 'VIP'),
(302, 'VIP'),
(303, 'VIP'),
(304, 'VIP'),
(305, 'VIP'),
(306, 'VIP'),
(307, 'VIP'),
(308, 'VIP'),
(309, 'VIP'),
(310, 'VIP'),
(400, 'WARD BED'),
(401, 'WARD BED'),
(402, 'WARD BED'),
(403, 'WARD BED'),
(404, 'WARD BED'),
(405, 'WARD BED'),
(406, 'WARD BED'),
(407, 'WARD BED'),
(408, 'WARD BED'),
(409, 'WARD BED'),
(410, 'WARD BED'),
(500, 'CASUALTY BED'),
(501, 'CASUALTY BED'),
(502, 'CASUALTY BED'),
(503, 'CASUALTY BED'),
(504, 'CASUALTY BED'),
(505, 'CASUALTY BED'),
(506, 'CASUALTY BED'),
(507, 'CASUALTY BED'),
(508, 'CASUALTY BED'),
(509, 'CASUALTY BED'),
(510, 'CASUALTY BED');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Joe', 'joe@gmail.com', '202cb962ac59075b964b07152d234b70', 'People-Patient-Female-icon.png'),
(2, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'MJ6X3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vip`
--

CREATE TABLE `vip` (
  `id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vroom`
--

CREATE TABLE `vroom` (
  `id` varchar(10) NOT NULL,
  `roomno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wroom`
--

CREATE TABLE `wroom` (
  `id` varchar(10) NOT NULL,
  `roomno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `bigreg`
--
ALTER TABLE `bigreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casroom`
--
ALTER TABLE `casroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casualty`
--
ALTER TABLE `casualty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groom`
--
ALTER TABLE `groom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icu`
--
ALTER TABLE `icu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icuroom`
--
ALTER TABLE `icuroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientreg`
--
ALTER TABLE `patientreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalroom`
--
ALTER TABLE `totalroom`
  ADD PRIMARY KEY (`roomno1`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vroom`
--
ALTER TABLE `vroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wroom`
--
ALTER TABLE `wroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
