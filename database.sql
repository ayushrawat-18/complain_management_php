-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2017 at 12:38 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajivbhatia`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `com_id` int(6) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `cust_name` varchar(15) NOT NULL,
  `comp_type` varchar(50) NOT NULL,
  `comp_tytle` varchar(50) NOT NULL,
  `comp_desc` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `eng_id` int(5) NOT NULL,
  `eng_name` varchar(15) NOT NULL,
  `eng_comment` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `close_date` date NOT NULL,
  PRIMARY KEY (`com_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `complain`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(6) NOT NULL,
  `cust_name` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE IF NOT EXISTS `engineer` (
  `eng_id` int(6) NOT NULL,
  `eng_name` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `emobile` varchar(10) NOT NULL,
  `date_time` date NOT NULL,
  PRIMARY KEY (`eng_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`eng_id`, `eng_name`, `address`, `email`, `emobile`, `date_time`) VALUES
(876, 'Amit', 'b.col', 'amit@gmial.com', '2322', '0000-00-00'),
(678, 'Rajiv', 'n.colony', 'excess@gmial.com', '2331', '1973-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `plan_id` int(5) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `plan_date` date NOT NULL,
  PRIMARY KEY (`plan_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `plan`
--


-- --------------------------------------------------------

--
-- Table structure for table `reg_complain`
--

CREATE TABLE IF NOT EXISTS `reg_complain` (
  `user` varchar(15) NOT NULL,
  `cust_name` varchar(15) NOT NULL,
  `comp_type` varchar(15) NOT NULL,
  `comp_title` varchar(45) NOT NULL,
  `comp_desc` varchar(200) NOT NULL,
  `comp_date` date NOT NULL,
  PRIMARY KEY (`user`)
) TYPE=MyISAM;

--
-- Dumping data for table `reg_complain`
--

INSERT INTO `reg_complain` (`user`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `comp_date`) VALUES
('prash', 'prashant', 'Hardware', 'monitor', 'Monitor is not dislaying anything', '2017-02-01'),
('Rajiv', 'Rajiv', 'Software', 'Msoffice is not working', 'Lic. is expired', '2017-02-01'),
('Deepa', 'Deepak', 'Hardware', 'keyboard ', 'keyboard is not working', '2017-03-12'),
('prashant1', 'prashant', 'Network', 'software', 'asdf sdaf s', '2017-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `con_pass` varchar(15) NOT NULL,
  `sec_que` varchar(30) NOT NULL,
  `sec_ans` varchar(30) NOT NULL,
  PRIMARY KEY (`user`)
) TYPE=MyISAM;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `address`, `city`, `state`, `pin`, `emailid`, `phoneno`, `user`, `password`, `con_pass`, `sec_que`, `sec_ans`) VALUES
('Prashant', 'A46 Rispana Nagar', 'Dehradun', 'Uttarakhand', '248001', 'prashant12@gmail.com', '9832112321', 'prashant1', 'garg11', 'garg11', 'What is my nic name', 'pra');
