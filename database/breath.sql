-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-05-15 08:15:00
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

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
-- 建立時間： 2024-05-15 06:12:38
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pwd` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `account`:
--

-- --------------------------------------------------------

--
-- 資料表結構 `buyitems`
--
-- 建立時間： 2024-05-15 05:39:35
--

DROP TABLE IF EXISTS `buyitems`;
CREATE TABLE `buyitems` (
  `class` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `place` varchar(10) NOT NULL,
  `object` varchar(20) NOT NULL,
  `price` char(10) NOT NULL,
  `garbageAmount` char(20) DEFAULT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `buyitems`:
--

-- --------------------------------------------------------

--
-- 資料表結構 `messageboard`
--
-- 建立時間： 2024-05-15 05:39:35
--

DROP TABLE IF EXISTS `messageboard`;
CREATE TABLE `messageboard` (
  `time` datetime NOT NULL,
  `mail` char(20) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `messageboard`:
--

-- --------------------------------------------------------

--
-- 資料表結構 `opinion`
--
-- 建立時間： 2024-05-15 05:39:35
--

DROP TABLE IF EXISTS `opinion`;
CREATE TABLE `opinion` (
  `time` char(10) NOT NULL,
  `mail` char(50) NOT NULL,
  `feeback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `opinion`:
--

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--
-- 建立時間： 2024-05-15 05:39:35
--

DROP TABLE IF EXISTS `total`;
CREATE TABLE `total` (
  `date` datetime NOT NULL,
  `mail` char(20) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `total`:
--

-- --------------------------------------------------------

--
-- 資料表結構 `tree`
--
-- 建立時間： 2024-05-15 05:39:35
--

DROP TABLE IF EXISTS `tree`;
CREATE TABLE `tree` (
  `tId` char(10) NOT NULL,
  `treeAmoumt` char(10) DEFAULT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表的關聯 `tree`:
--

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`mail`);

--
-- 資料表索引 `buyitems`
--
ALTER TABLE `buyitems`
  ADD PRIMARY KEY (`class`);

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

--
-- 資料表索引 `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`tId`,`class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
