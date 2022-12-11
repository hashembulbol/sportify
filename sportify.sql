-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 10:00 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportify`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `area` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `MonthSub` int(11) NOT NULL,
  `hrcost` int(11) NOT NULL,
  `sport` varchar(50) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `opentime` time NOT NULL,
  `closetime` time NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `scid`, `adminid`, `name`, `area`, `type`, `MonthSub`, `hrcost`, `sport`, `notes`, `longitude`, `latitude`, `phone`, `opentime`, `closetime`, `email`) VALUES
(1, 1, 1, 'Football of the Club', 20, '2', 0, 10, 'football', 'We bla We blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe blaWe bla', 35.8433, 34.4223, '', '08:00:00', '22:00:00', ''),
(2, 2, 2, 'The second club pg activitty', 30, '2', 0, 10, 'Basket', 'can become volley', 35.4955, 33.8886, '', '00:00:00', '00:00:00', ''),
(3, 2, 3, 'The second club gym activitty', 30, '1', 40, 0, '', '', 0, 0, '', '00:00:00', '00:00:00', ''),
(4, 1, 4, 'The second activity of first club', 30, '2', 0, 0, 'Volley', '', 35.8089, 34.299, '', '00:00:00', '00:00:00', ''),
(5, 3, 5, 'hashembulbo', 33, '1', 41, 0, '', 'ddddddddddddddddddddddd', 35.8479, 33.8561, '961263637', '00:00:00', '11:00:00', 'testin@gym.com'),
(6, 3, 5, 'PG testin', 200, '2', 0, 10, 'Football', 'asnmddddddddddddddddsasdnmfffffffffffff', 0, 0, '9128928', '02:00:00', '18:00:00', 'pgtestin@kasdfm.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `pw` varchar(50) COLLATE utf8_bin NOT NULL,
  `un` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `phone`, `birthdate`, `pw`, `un`, `email`) VALUES
(1, 'First', 'Manager', 961263637, '1990-11-08', '0000', 'first', 'first@gmail.com'),
(2, 'Secondo', 'seconda', 961263637, '2019-05-14', '0000', 'secondo', ''),
(3, 'moegym', 'Sibai', 961263637, '2019-05-19', '0000', 'sss', ''),
(4, 'Khaled', 'Bulbol', 961263637, '2019-05-13', '0000', 'khaled', ''),
(5, 'Testin', 'Guy', 961263637, '1990-11-08', '0000', 'testin', 'hashem@lksdf.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminsubmissions`
--

CREATE TABLE `adminsubmissions` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `pw` varchar(50) COLLATE utf8_bin NOT NULL,
  `un` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `clubname` varchar(50) COLLATE utf8_bin NOT NULL,
  `actname` varchar(50) COLLATE utf8_bin NOT NULL,
  `checked` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminsubmissions`
--

INSERT INTO `adminsubmissions` (`id`, `fname`, `lname`, `phone`, `birthdate`, `pw`, `un`, `email`, `longitude`, `latitude`, `clubname`, `actname`, `checked`) VALUES
(1, 'First', 'Manager', 961263637, '1990-11-08', '0000', 'first', 'first@gmail.com', 0, 0, '', '', 1),
(2, 'Secondo', 'seconda', 961263637, '2019-05-14', '0000', 'secondo', '', 0, 0, '', '', 1),
(3, 'moegym', 'Sibai', 961263637, '2019-05-19', '0000', 'sss', '', 0, 0, '', '', 1),
(4, 'Khaled', 'Bulbol', 961263637, '2019-05-13', '0000', 'khaled', '', 0, 0, '', '', 1),
(5, 'new', 'admin', 2147483647, '2019-05-13', '0000', 'hashem', 'hashembulbol@gmail.com', 0, 0, '', '', 1),
(6, 'new', 'admin', 2147483647, '2019-05-13', '0000', 'hashem', 'hashembulbol@gmail.com', 0, 0, '', '', 1),
(7, 'new', 'admin', 2147483647, '2019-05-13', '00000', 'hashem', 'hashembulbol@gmail.com', 0, 0, '', '', 1),
(8, 'First', 'admin', 2147483647, '2019-05-21', '000000', 'hashem', 'hashe6m@gmail.com', 0, 0, '', '', 1),
(9, 'First', 'admin', 2147483647, '2019-05-31', '00000', 'hashem', 'hashe6m@gmail.com', 0, 0, '', '', 1),
(10, 'Abraham', 'abisaab', 2147483647, '2019-05-24', '0000', 'abiii', 'abi@jasfd.com', 0, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `un` varchar(50) COLLATE utf8_bin NOT NULL,
  `pw` varchar(50) COLLATE utf8_bin NOT NULL,
  `fitlevel` varchar(50) COLLATE utf8_bin NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fname`, `lname`, `phone`, `birthdate`, `un`, `pw`, `fitlevel`, `longitude`, `latitude`) VALUES
(44, 'Hashem', 'Bulbol', 2147483647, '2019-05-06', 'hashem', '0000', '2', 35.597312927246094, 33.81008529663086),
(45, 'mohammad', 'ghawi', 2342342, '2019-05-07', 'moeee', '0000', '2', 35.597312927246094, 33.81008529663086),
(46, 'Sarar', 'Halmoiushi', 961263637, '1990-11-08', 'sarar', '0000', 'HIGH', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deleterequests`
--

CREATE TABLE `deleterequests` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `date` date NOT NULL,
  `reason` text COLLATE utf8_bin NOT NULL,
  `actid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `deleterequests`
--

INSERT INTO `deleterequests` (`id`, `adminid`, `date`, `reason`, `actid`) VALUES
(2, 0, '2019-05-18', 'becauseeeee', 3),
(3, 3, '2019-05-18', 'becauseeeee', 3);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `actid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `reason` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `actid`, `cid`, `reason`, `date`) VALUES
(2, 6, 45, 'asdasdasdasdasd', '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `newactssubmissions`
--

CREATE TABLE `newactssubmissions` (
  `id` int(11) NOT NULL,
  `actname` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `type` int(11) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `adminid` int(11) NOT NULL,
  `checked` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `newactssubmissions`
--

INSERT INTO `newactssubmissions` (`id`, `actname`, `date`, `type`, `longitude`, `latitude`, `adminid`, `checked`) VALUES
(1, 'added facility', '2019-05-18', 1, 36.09679447631834, 34.548399948146546, 5, 1),
(3, 'Other facility', '2019-05-18', 1, 0, 0, 0, 1),
(4, 'Other facility other', '2019-05-18', 1, 0, 0, 0, 1),
(5, 'Las', '2019-05-18', 1, 36.09679447631834, 34.548399948146546, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `actid` int(11) NOT NULL,
  `date` date NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `actid`, `date`, `img`, `description`) VALUES
(3, 5, '2019-05-07', 'hd-wallpapers-for-windows-12.jpg', '2019-05-07'),
(4, 5, '2019-05-19', 'brain_3-wallpaper-1920x1080.jpg', '2019-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `slotid` int(11) NOT NULL,
  `actid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `slotid`, `actid`, `cid`, `date`) VALUES
(1, 1, 1, 44, '2019-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `text`, `date`, `rate`) VALUES
(1, 'good gym but lacks asdasdas', '2019-05-20', 3),
(2, 'Shitty club', '2019-05-20', 2),
(3, 'This is the second review of club 2', '2019-05-14', 9),
(4, 'kind of ehh', '0000-00-00', 8),
(5, 'kind of ehh', '0000-00-00', 8),
(6, 'kind of ehh', '0000-00-00', 8),
(7, 'yesssssss very good', '0000-00-00', 8),
(8, 'sdfffffffffffffffffff', '0000-00-00', 8),
(9, 'wtf', '0000-00-00', 7),
(10, 'last one', '0000-00-00', 9),
(11, 'kkk', '0000-00-00', 9),
(12, 'kkk', '0000-00-00', 9),
(13, 'kkk', '0000-00-00', 9),
(14, 'mashheh', '0000-00-00', 6),
(15, 'mashheh', '0000-00-00', 6),
(16, 'what\r\n', '0000-00-00', 8),
(17, 'heyy', '0000-00-00', 7),
(18, 'heyy', '0000-00-00', 7),
(19, 'heyy', '2019-05-11', 7),
(20, 'Heyyeyeiuela', '2019-05-11', 8),
(21, 'Heyyeyeiuela', '2019-05-11', 8),
(22, 'FUCK', '2019-05-14', 9);

-- --------------------------------------------------------

--
-- Table structure for table `revsub`
--

CREATE TABLE `revsub` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `actid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `revsub`
--

INSERT INTO `revsub` (`id`, `rid`, `cid`, `actid`) VALUES
(1, 1, 44, 3),
(2, 2, 45, 2),
(3, 3, 44, 2),
(5, 10, 46, 3),
(6, 11, 46, 3),
(7, 12, 46, 3),
(8, 13, 46, 3),
(9, 14, 46, 3),
(10, 15, 46, 3),
(11, 16, 46, 3),
(12, 17, 46, 3),
(13, 18, 46, 3),
(14, 19, 46, 3),
(15, 20, 46, 3),
(16, 21, 46, 3),
(17, 22, 46, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE `sc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`id`, `name`) VALUES
(1, 'The Club'),
(2, 'The second club'),
(3, 'New Testing');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `stime`, `etime`) VALUES
(1, '08:00:00', '09:00:00'),
(2, '10:00:00', '11:00:00'),
(3, '11:00:00', '12:00:00'),
(4, '12:00:00', '13:00:00'),
(5, '13:00:00', '14:00:00'),
(6, '14:00:00', '15:00:00'),
(7, '15:00:00', '16:00:00'),
(8, '16:00:00', '17:00:00'),
(9, '17:00:00', '18:00:00'),
(10, '18:00:00', '19:00:00'),
(11, '19:00:00', '20:00:00'),
(12, '20:00:00', '21:00:00'),
(13, '21:00:00', '22:00:00'),
(14, '22:00:00', '23:00:00'),
(15, '23:00:00', '00:00:00'),
(16, '00:00:00', '01:00:00'),
(17, '01:00:00', '02:00:00'),
(18, '02:00:00', '03:00:00'),
(19, '03:00:00', '04:00:00'),
(20, '04:00:00', '05:00:00'),
(21, '05:00:00', '06:00:00'),
(22, '06:00:00', '07:00:00'),
(23, '07:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `actid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `actid`, `cid`, `date`) VALUES
(1, 5, 46, '2019-05-17'),
(2, 5, 45, '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `linkedin` text COLLATE utf8_bin NOT NULL,
  `ig` text COLLATE utf8_bin NOT NULL,
  `fb` text COLLATE utf8_bin NOT NULL,
  `votes` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `brief` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `fname`, `lname`, `phone`, `linkedin`, `ig`, `fb`, `votes`, `birthdate`, `brief`) VALUES
(1, 'Tawfiz', 'ddds', '961263637', '', '', '', 107, '2019-05-06', 'im blablalballbalbalbal');

-- --------------------------------------------------------

--
-- Table structure for table `trainersubmissions`
--

CREATE TABLE `trainersubmissions` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` int(15) NOT NULL,
  `fb` text COLLATE utf8_bin NOT NULL,
  `linkedin` text COLLATE utf8_bin NOT NULL,
  `ig` text COLLATE utf8_bin NOT NULL,
  `dateSubmission` date NOT NULL,
  `specialties` text COLLATE utf8_bin NOT NULL,
  `birthdate` date NOT NULL,
  `checked` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `trainersubmissions`
--

INSERT INTO `trainersubmissions` (`id`, `fname`, `lname`, `phone`, `fb`, `linkedin`, `ig`, `dateSubmission`, `specialties`, `birthdate`, `checked`) VALUES
(1, '', '', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(2, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(3, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(4, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(5, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(6, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(7, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(8, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-07', 1),
(9, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-10', 1),
(10, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-10', 1),
(11, 'First', 'Trainer', 22222222, 'dddd', 'asddd', 'dddd', '2019-05-07', 'sadasdasdasdasdasdasdasd', '2019-05-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scid` (`scid`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsubmissions`
--
ALTER TABLE `adminsubmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleterequests`
--
ALTER TABLE `deleterequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `actid` (`actid`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actid` (`actid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `newactssubmissions`
--
ALTER TABLE `newactssubmissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actid` (`actid`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slotid` (`slotid`),
  ADD KEY `actid` (`actid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revsub`
--
ALTER TABLE `revsub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rid` (`rid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `actid` (`actid`);

--
-- Indexes for table `sc`
--
ALTER TABLE `sc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actid` (`actid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainersubmissions`
--
ALTER TABLE `trainersubmissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminsubmissions`
--
ALTER TABLE `adminsubmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `deleterequests`
--
ALTER TABLE `deleterequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newactssubmissions`
--
ALTER TABLE `newactssubmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `revsub`
--
ALTER TABLE `revsub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sc`
--
ALTER TABLE `sc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainersubmissions`
--
ALTER TABLE `trainersubmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`scid`) REFERENCES `sc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_ibfk_2` FOREIGN KEY (`adminid`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`actid`) REFERENCES `activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`actid`) REFERENCES `activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`actid`) REFERENCES `activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserve_ibfk_3` FOREIGN KEY (`slotid`) REFERENCES `slot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `revsub`
--
ALTER TABLE `revsub`
  ADD CONSTRAINT `revsub_ibfk_1` FOREIGN KEY (`actid`) REFERENCES `activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `revsub_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `revsub_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `review` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub`
--
ALTER TABLE `sub`
  ADD CONSTRAINT `sub_ibfk_1` FOREIGN KEY (`actid`) REFERENCES `activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
