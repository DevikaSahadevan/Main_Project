-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 08:16 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `f_id` int(5) NOT NULL,
  `f_user` varchar(30) NOT NULL,
  `feedback` text NOT NULL,
  `fdate` date NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `f_user`, `feedback`, `fdate`) VALUES
(1, 'alan@gmail.com', ' Satisfied User', '2022-11-24'),
(2, 'alan@gmail.com', ' give speech assistance', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sts` int(5) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`, `sts`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 'admin', 1),
(2, 'alan@gmail.com', 'Alan@123', 'user', 1),
(3, 'anamika@gmail.com', 'Anu@1234', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutrition`
--

CREATE TABLE IF NOT EXISTS `tbl_nutrition` (
  `n_id` int(5) NOT NULL,
  `nutrition_desc` text NOT NULL,
  `n_image` text NOT NULL,
  `n_sts` int(5) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nutrition`
--

INSERT INTO `tbl_nutrition` (`n_id`, `nutrition_desc`, `n_image`, `n_sts`) VALUES
(2, 'Good health food', 'nutrition/2_.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_user` text NOT NULL,
  `pay_name` text NOT NULL,
  `pay_cardno` text NOT NULL,
  `pay_ccv` int(3) NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `pay_expiryyear` text NOT NULL,
  `pay_expirymonth` text NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `pay_user`, `pay_name`, `pay_cardno`, `pay_ccv`, `pay_amount`, `pay_expiryyear`, `pay_expirymonth`) VALUES
(3, 'alan@gmail.com', 'Sajeev', '1111111111111111', 0, 0, '17', '01'),
(4, 'alan@gmail.com', 'Sajeev', '1111111111111111', 213, 1111, '16', '01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `baby_id` int(10) NOT NULL,
  `g_name` varchar(30) NOT NULL,
  `g_phno` varchar(12) NOT NULL,
  `g_aphno` varchar(12) NOT NULL,
  `g_mailid` varchar(50) NOT NULL,
  `baby_name` varchar(30) NOT NULL,
  `b_dob` date NOT NULL,
  `b_gender` varchar(10) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`baby_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`baby_id`, `g_name`, `g_phno`, `g_aphno`, `g_mailid`, `baby_name`, `b_dob`, `b_gender`, `h_name`, `s_name`, `zipcode`, `city`, `state`, `country`) VALUES
(1, 'Alan', '8547764104', '8989898989', 'alan@gmail.com', 'ammu', '2016-06-16', 'female', 'Lekshmi', 'Palathara', '691020', 'Kollam', 'Kerala', 'India'),
(2, 'Anamika', '6556656565', '3434434343', 'anamika@gmail.com', 'anu', '2020-12-11', 'female', 'Villa', 'Attumkode', '433434', 'Kollam', 'Kerala', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `service_id` int(5) NOT NULL,
  `service` text NOT NULL,
  `s_sts` int(5) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service`, `s_sts`) VALUES
(1, ' Vaccine Appointment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitterreg`
--

CREATE TABLE IF NOT EXISTS `tbl_sitterreg` (
  `sitter_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `aphno` varchar(12) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `experience` varchar(5) NOT NULL,
  `category` varchar(30) NOT NULL,
  `house_name` varchar(30) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `s_sts` int(5) NOT NULL,
  `skill1` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `skill4` text NOT NULL,
  `skill5` text NOT NULL,
  PRIMARY KEY (`sitter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sitterreg`
--

INSERT INTO `tbl_sitterreg` (`sitter_id`, `name`, `phno`, `aphno`, `mailid`, `dob`, `id_proof`, `gender`, `experience`, `category`, `house_name`, `street_name`, `zipcode`, `city`, `state`, `country`, `profile_pic`, `s_sts`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES
(1, 'Ananya', '8899887788', '7788990099', 'ana@gmail.com', '1997-07-11', 'idproofs/1_ana@gmail.com.jpg', 'female', '2', 'Full-Time', 'sghhdcs', 'guiods', '875436', 'kollam', 'Kerala', 'India', 'profile_pic/1_ana@gmail.com.jpg', 1, '', '', '', '', '');
