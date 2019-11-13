-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 12:32 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(4) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `book_subcat` int(4) NOT NULL,
  `book_desc` varchar(400) NOT NULL,
  `book_publ` varchar(50) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `book_pages` int(4) NOT NULL,
  `book_price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_subcat`, `book_desc`, `book_publ`, `book_isbn`, `book_pages`, `book_price`) VALUES
(1, 'The Time Machine - H.G.Wells', 1, 'abcd', 'sada', 999, 400, 161);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'fiction');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_email` varchar(30) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `sid` int(4) NOT NULL,
  `b_id` int(4) DEFAULT NULL,
  `u_id` int(4) DEFAULT NULL,
  `sf_name` varchar(50) NOT NULL,
  `sl_name` varchar(50) NOT NULL,
  `ssex` varchar(200) NOT NULL,
  `smobile` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `saddress1` varchar(600) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `saddress2` text,
  `stown` varchar(50) NOT NULL,
  `sstate` varchar(60) NOT NULL,
  `spin` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sid`, `b_id`, `u_id`, `sf_name`, `sl_name`, `ssex`, `smobile`, `semail`, `saddress1`, `saddress2`, `stown`, `sstate`, `spin`) VALUES
(64, 1, NULL, 'Avinash', 'Kumar', 'm', '98765443210', 'iavinas@yandex.com', 'Mens Hostel Sir M Visvesvaraya Institute of Technology, Bangalore', 'Hunsamarnhali', 'Banglore', 'karnataka', '562157');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `subcat_id` int(4) NOT NULL,
  `scat_id` int(4) NOT NULL,
  `subcat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`subcat_id`, `scat_id`, `subcat_name`) VALUES
(1, 1, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_pw` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_pw`, `user_email`) VALUES
(1, 'Avinash', 'Kumar', 'iavinas', 'iavinas@yandex.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_subcat` (`book_subcat`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `ship_book` (`b_id`),
  ADD KEY `ship_user` (`u_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `scat_cat` (`scat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_subcat` FOREIGN KEY (`book_subcat`) REFERENCES `sub_cat` (`subcat_id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `ship_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `scat_cat` FOREIGN KEY (`scat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
