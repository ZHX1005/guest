-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-07-27 03:51:50
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guest`
--

-- --------------------------------------------------------

--
-- 表的结构 `guestlist`
--

CREATE TABLE IF NOT EXISTS `guestlist` (
  `id` int(4) unsigned NOT NULL COMMENT 'ID ',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `recontent` text NOT NULL COMMENT '内容回复',
  `reply` int(1) NOT NULL COMMENT '是否回复',
  `addate` date NOT NULL COMMENT '留言时间',
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
