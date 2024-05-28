-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2024-05-28 12:34:20
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `breath`
--
CREATE DATABASE IF NOT EXISTS `breath` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `breath`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`mail`, `phone`, `name`, `pwd`) VALUES
('111@g', '0912345678', '蔡承融', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `buyitems`
--

DROP TABLE IF EXISTS `buyitems`;
CREATE TABLE `buyitems` (
  `mail` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `class` varchar(10) NOT NULL,
  `object` varchar(20) NOT NULL,
  `price` char(10) NOT NULL,
  `garbageAmount` char(20) DEFAULT NULL,
  `memo` varchar(100) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `buyitems`
--

INSERT INTO `buyitems` (`mail`, `record`, `class`, `object`, `price`, `garbageAmount`, `memo`, `lat`, `lng`, `time`) VALUES
('111@g', '支出', '早餐', '好吃早餐', '50', '0', '', '24.1494706', '120.6835052', '2024-05-28'),
('111@g', '支出', '午餐', '好吃午餐', '120', '3', '', '24.1494706', '120.6835052', '2024-05-28'),
('111@g', '支出', '娛樂', '好讚娛樂', '900', '10', '天氣真好', '24.1494706', '120.6835052', '2024-05-28'),
('111@g', '支出', '早餐', '好吃早餐', '10', '0', '天氣不好', '24.149452', '120.6835069', '2024-05-27');

-- --------------------------------------------------------

--
-- 資料表結構 `messageboard`
--

DROP TABLE IF EXISTS `messageboard`;
CREATE TABLE `messageboard` (
  `time` datetime NOT NULL,
  `mail` char(20) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `opinion`
--

DROP TABLE IF EXISTS `opinion`;
CREATE TABLE `opinion` (
  `time` char(10) NOT NULL,
  `mail` char(50) NOT NULL,
  `feeback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

DROP TABLE IF EXISTS `total`;
CREATE TABLE `total` (
  `date` datetime NOT NULL,
  `mail` char(20) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `tree`
--

DROP TABLE IF EXISTS `tree`;
CREATE TABLE `tree` (
  `tId` char(10) NOT NULL,
  `treeAmoumt` char(10) DEFAULT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`mail`);

--
-- 資料表索引 `messageboard`
--
ALTER TABLE `messageboard`
  ADD PRIMARY KEY (`time`,`mail`);

--
-- 資料表索引 `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`time`,`mail`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`date`,`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
