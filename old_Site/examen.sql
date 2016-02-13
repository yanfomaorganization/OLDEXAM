-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 05:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `annee1`
--

CREATE TABLE IF NOT EXISTS `annee1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `annee` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prof` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `examen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course1_id` (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `annee1`
--


--
-- Table structure for table `annee2`
--

CREATE TABLE IF NOT EXISTS `annee2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `annee` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prof` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `examen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course2_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `annee3`
--

CREATE TABLE IF NOT EXISTS `annee3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `annee` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prof` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `examen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course3_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course1`
--

CREATE TABLE IF NOT EXISTS `course1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course1`
--


-- --------------------------------------------------------

--
-- Table structure for table `course2`
--

CREATE TABLE IF NOT EXISTS `course2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course3`
--

CREATE TABLE IF NOT EXISTS `course3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course4`
--

CREATE TABLE IF NOT EXISTS `course4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course5`
--

CREATE TABLE IF NOT EXISTS `course5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctorat`
--

CREATE TABLE IF NOT EXISTS `doctorat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prof` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `examen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `annee` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prof` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `examen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course4_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_table`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
