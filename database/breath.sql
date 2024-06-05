-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2024-06-05 17:34:58
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
('111@g', '0912345678', '書偉', '123'),
('222@g', '0912345678', '小楊', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `buyitems`
--

DROP TABLE IF EXISTS `buyitems`;
CREATE TABLE `buyitems` (
  `bid` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `class` varchar(10) NOT NULL,
  `object` varchar(20) NOT NULL,
  `price` char(10) NOT NULL,
  `memo` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `did` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `num` int(10) NOT NULL,
  `mid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `details`
--

INSERT INTO `details` (`did`, `eid`, `num`, `mid`) VALUES
(1, 6, 10, 1),
(2, 3, 10, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `environmental_friendly`
--

DROP TABLE IF EXISTS `environmental_friendly`;
CREATE TABLE `environmental_friendly` (
  `eid` int(10) NOT NULL,
  `EFObject` varchar(100) NOT NULL,
  `save` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `environmental_friendly`
--

INSERT INTO `environmental_friendly` (`eid`, `EFObject`, `save`) VALUES
(1, '環保餐盒', 0.3),
(2, '環保吸管', 0.00533),
(3, '大眾運輸', 0.69),
(4, '環保袋', 0.057),
(5, '環保筷', 0.02),
(6, '環保杯', 0.0000032);

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
-- 資料表結構 `mytree`
--

DROP TABLE IF EXISTS `mytree`;
CREATE TABLE `mytree` (
  `mid` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `mytree`
--

INSERT INTO `mytree` (`mid`, `mail`, `lat`, `lng`) VALUES
(1, '111@g', '24.1495281', '120.6835834'),
(2, '111@g', '24.1495531', '120.6835196'),
(3, '111@g', '24.1495531', '120.6835196');

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
  ADD PRIMARY KEY (`bid`);

--
-- 資料表索引 `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`did`);

--
-- 資料表索引 `environmental_friendly`
--
ALTER TABLE `environmental_friendly`
  ADD PRIMARY KEY (`eid`);

--
-- 資料表索引 `messageboard`
--
ALTER TABLE `messageboard`
  ADD PRIMARY KEY (`time`,`mail`);

--
-- 資料表索引 `mytree`
--
ALTER TABLE `mytree`
  ADD PRIMARY KEY (`mid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `buyitems`
--
ALTER TABLE `buyitems`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `details`
--
ALTER TABLE `details`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `environmental_friendly`
--
ALTER TABLE `environmental_friendly`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mytree`
--
ALTER TABLE `mytree`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
