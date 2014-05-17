-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2014 at 08:52 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `catagory_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(7, 'database'),
(1, 'Poem'),
(3, 'Song'),
(5, 'sql'),
(2, 'Story'),
(6, 'XML');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `contents`, `date_posted`, `user_id`, `cat_id`) VALUES
(1, 'sslfsfj', 'sfsfsaf', '2014-05-14 23:37:10', 0, 3),
(2, 'Music', 'Music is the art of mind control', '2014-05-14 23:47:53', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `email` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `gender`) VALUES
(1, 'suvrajitroy5@gmail.com', '704745', 'Suvrajit ', 'Roy', 'Chowmuhani', '01675086158', 'male'),
(2, 'Suvro', '12345', 'S', 'R', 'asf', '01', 'male'),
(3, 'nos', 'nos', 'Nazrul', 'Islam', 'sfasfa', '1323', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
