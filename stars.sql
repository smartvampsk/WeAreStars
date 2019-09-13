-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 08:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `surname`, `username`, `password`) VALUES
(1, 'hello', 'hey', 'admin1', '$2y$10$jE95XGevudfGKy8xwyWUg.qGg6TMjK3rQ4Jgy72q0ROiNDOPupqqy'),
(3, 'adminname', 'adminsurname', 'admin', '$2y$10$uTwNDVw8NvhmxB.akYO0cefzRH6kz.4NyeudQZiimoUARG5qlXmCC');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(999) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `submitted_by` int(11) NOT NULL,
  `published_date` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `submitted_by`, `published_date`, `image`) VALUES
(1, 'twitter', 'dhaf lkasdh fkjdsahf lkdjsnf kjhdskjanh kjdsfah kjsadh kdjddsjka lkdsahfn kjdsfhb kljdsfh kjdsfh kldsjfnh vkjsdfnh kjsfdh \r\nkdjsanhf lkjdshjdsfalk hdsknh ldsfjlkdsjf lkjsdf \r\ndsjlkadw;lwsfj lsdkjf ;lsdf', 1, '2019-08-30 13:35:41', 'blog.jpg'),
(2, 'facebook', 'dhaf lkasdh fkjdsahf lkdjsnf kjhdskjanh ', 1, '2019-08-30 13:59:54', '8487.png'),
(3, 'testing testing', 'dhaf lkasdh fkjdsahf lkdjsnf kjhdskjanh kjdsfah kjsadh kdjddsjka lkdsahfn kjdsfhb kljdsfh kjdsfh kldsjfnh vkjsdfnh kjsfdh \r\nkdjsanhf lkjdshjdsfalk hdsknh ldsfjlkdsjf lkjsdf \r\ndsjlkadw;lwsfj lsdkjf ;lsdf', 1, '2019-08-30 14:30:44', '95142.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `agency_name` varchar(502) DEFAULT 'NULL',
  `firstname` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `membership` varchar(255) NOT NULL,
  `member_type` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `agency_name`, `firstname`, `surname`, `gender`, `dob`, `email`, `contact`, `address`, `skills`, `membership`, `member_type`, `username`, `password`) VALUES
(10, '', 'avi', 'pan', 'Male', '1995-02-10', 'avipan@gmail.com', '9812345678', 'jkdah', 'Production', 'Six months - $550 plus GST', 1, 'avipan', '$2y$10$maa4vQ2xMmOyM95.vXs0C.SGLS2gUf.0qw.BvtQu41awJ1bY5kKJm'),
(11, '', 'san', 'kha', 'Male', '0000-00-00', 'sankha@gmail.com', '9812364578', 'Tinkune', 'Media', 'Lifetime access - $3500 plus GST', 1, 'sankha', '$2y$10$sGAjX2HP/NQCO0sZWbavJuv8fhrnBO6pY12aS08CNd6Nk1TIvVLty'),
(25, 'NULL', 'shi', 'shre', 'Male', '1995-02-01', 'shi@gmail.com', '9815254254', 'Banesh', 'Marketing', 'One year - $800 plus GST', 1, 'shishre', '$2y$10$0kPQoXZtqYbJKP.BA6eGR.kM/mh.yWI2MWGd2cSro0geaRtbR74qG'),
(26, 'dsa', NULL, NULL, NULL, NULL, 'dsad@gmail.com', '9895664154', 'sda', 'Media', 'One year - $800 plus GST', 2, 'sda', '$2y$10$3Ji.HU9yQVWxSxHSWhlj/.SrvThRmVCA3DsLU8PNL13xDWlQFgP9i'),
(27, 'fdsca', NULL, NULL, NULL, NULL, 'sda@fdssa', '5464516541', 'sdafd', 'Public Relation', 'One year - $800 plus GST', 2, 'dsa', '$2y$10$aAWEhrXaU5AcaeGvCzx8r.3EJ8uMX3xTyeU.WNIGeBKAh9hxdu7ui');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(2) NOT NULL,
  `logged_date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `user_id`, `user_type`, `logged_date`, `time_in`, `time_out`) VALUES
(3, 10, 1, '2019-09-01', '15:45:42', '15:46:55'),
(4, 11, 1, '2019-09-01', '15:46:28', '15:46:55'),
(5, 10, 1, '2019-09-01', '15:50:08', '15:50:32'),
(6, 26, 2, '2019-09-01', '15:51:34', '15:51:44'),
(7, 10, 1, '2019-09-01', '15:56:56', '15:57:06'),
(8, 26, 2, '2019-09-01', '15:57:11', '15:59:09'),
(9, 10, 1, '2019-09-01', '16:05:52', '16:07:06'),
(10, 10, 1, '2019-09-01', '16:07:09', '16:14:56'),
(11, 26, 2, '2019-09-01', '16:14:59', '16:15:10'),
(12, 10, 1, '2019-09-01', '16:15:12', '16:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `name`, `contact`, `email`, `subject`, `message`) VALUES
(1, 'avihal', '9854463546', 'avihal@gmail.com', 'dsadsa', 'sdajdlkas l'),
(2, 'avihal', '98465563464', 'avihal@gmail.com', 'sda', 'hello htis isoi kjsdpa'),
(4, 'dsad', '98754545', 'dsad@gmail.com', 'da', 'jkdsahldkjaoldj'),
(5, 'das', 'a', 'da@fda', 'xsa', 'xa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
