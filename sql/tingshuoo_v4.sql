-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `tingshuoo`
--
CREATE DATABASE IF NOT EXISTS `tingshuoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tingshuoo`;

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `Account` varchar(30) NOT NULL COMMENT '帳號',
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '產生時間',
  `PName` varchar(10) NOT NULL COMMENT '商品名稱',
  `Num` int(3) NOT NULL COMMENT '數量',
  `Total` int(4) NOT NULL COMMENT '價格',
  `Ok` varchar(1) NOT NULL COMMENT '是否下訂(已1)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `cart`
--

INSERT INTO `cart` (`Account`, `Time`, `PName`, `Num`, `Total`, `Ok`) VALUES
('user1', '2021-05-15 10:43:48', '告白乳酪', 1, 120, ''),
('user1', '2021-05-15 10:43:48', '抹茶塔', 2, 110, ''),
('user2', '2021-05-15 10:44:17', '生巧克力', 3, 110, ''),
('user3', '2021-05-15 10:44:17', '蘋果塔', 2, 110, '');

-- --------------------------------------------------------

--
-- 資料表結構 `cart_record`
--

DROP TABLE IF EXISTS `cart_record`;
CREATE TABLE `cart_record` (
  `Account` varchar(30) NOT NULL,
  `PName` varchar(10) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Num` int(3) NOT NULL,
  `Total` int(4) NOT NULL,
  `LogAct` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `Account` varchar(30) NOT NULL COMMENT '帳號',
  `Password` varchar(30) NOT NULL COMMENT '密碼',
  `Name` varchar(20) NOT NULL COMMENT '取貨名稱',
  `Email` varchar(64) DEFAULT NULL COMMENT '信箱',
  `Tel` varchar(10) DEFAULT NULL COMMENT '電話',
  `IDProof` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`Account`, `Password`, `Name`, `Email`, `Tel`, `IDProof`) VALUES
('user1', '1234567890', '店員一號', 'user1@yahoo.com.tw', '0900000001', '0'),
('user2', '0987654321', '店員二號', 'user2@gmail.com', '0900000002', '0'),
('user3', '123123123', '顧客一號', 'user3@yahoo.com.tw', '0900000003', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `orderform`
--

DROP TABLE IF EXISTS `orderform`;
CREATE TABLE `orderform` (
  `OID` int(5) NOT NULL COMMENT '訂單編號',
  `Account` varchar(30) NOT NULL COMMENT '帳號',
  `PName` varchar(10) NOT NULL COMMENT '商品名稱',
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '下訂時間',
  `Num` int(3) NOT NULL COMMENT '數量',
  `Price` int(4) NOT NULL COMMENT '價格',
  `Finish` int(1) NOT NULL COMMENT '完成'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `orderform_record`
--

DROP TABLE IF EXISTS `orderform_record`;
CREATE TABLE `orderform_record` (
  `OID` int(5) NOT NULL,
  `Account` varchar(30) NOT NULL,
  `PName` varchar(10) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Num` int(3) NOT NULL,
  `LogAct` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `PName` varchar(10) NOT NULL COMMENT '名稱',
  `Price` int(4) NOT NULL COMMENT '價格',
  `Ingredient` varchar(100) NOT NULL COMMENT '成分',
  `Stock` int(3) NOT NULL COMMENT '庫存',
  `Pic` varchar(20) NOT NULL COMMENT '圖片',
  `Introduction` varchar(256) NOT NULL COMMENT '介紹',
  `Type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`PName`, `Price`, `Ingredient`, `Stock`, `Pic`, `Introduction`, `Type`) VALUES
('告白乳酪', 120, '奶油乳酪、奶油、麵粉、砂糖、櫻花巧克力', 13, '告白乳酪', '［重乳酪］搭配［有機玫瑰花醬］<br>\r\n灑上有機玫瑰花瓣<br>\r\n吃了會有戀愛的感覺<br>\r\n但不用愛上老闆沒關係哈哈哈', '情人節必備'),
('抹茶塔', 45, '蛋、麵粉、奶油、鮮奶油、抹茶、吉利丁', 5, '抹茶塔', '點綴：金箔<br>\r\n內餡：日本靜岡抹茶、Weiss 白巧克力<br>\r\n底層：海綿蛋糕<br>\r\n<br>\r\n淡淡茶香，不苦澀！<br>\r\n適合非重度抹茶控！', '當季熱賣'),
('柚之塔', 50, '蛋、麵粉、奶油、奶油乳酪、柚子、吉利丁', 7, '柚之塔', '裝飾：新鮮柚子、檸檬皮<br>\r\n上層：香提奶油餡<br>\r\n內餡：日本白柚內餡、柚子絲、海綿蛋糕、自製草莓醬<br>\r\n<br>\r\n1、上層香提奶油餡加入酸奶<br>\r\n2、內餡使用貴森森的「日本白柚」酸的很香、很舒服<br>\r\n3、夾層柚子絲增添果肉口感<br>\r\n4、海綿蛋糕舒緩酸度<br>\r\n5、底層自製熬煮草莓醬<br>\r\n6、手工酥脆塔皮<br>\r\n<br>\r\n看到這裡，是不是分泌口水了！', '當季熱賣'),
('法式焦糖烤布蕾', 55, '雞蛋、牛奶、奶粉、香草豆莢、糖、水、鮮奶油', 12, '法式焦糖烤布蕾', '這道經典的法式烤布蕾，又稱為法式焦糖布丁。<br>\r\n據說在1691年，在法國貴族大廚師 François Massialot的著作裡首次出現<br>\r\n法文Crème brûlée 的意思是「燒焦的奶油」。<br>\r\n烤布蕾主要以蛋和鮮奶油為主題，放進烤箱低中溫烘烤。<br>\r\n溫度過高會影響質地，也容易造成燒焦噢<br>\r\n其實也有人使用牛奶代替鮮奶油，\r\n不過鮮奶油更能提升布蕾的綿密口感呢！', '當季熱賣'),
('烤布蕾泡芙', 30, '雞蛋、牛奶、奶粉、香草豆莢、糖、水、鮮奶油、低筋麵粉', 20, '烤布蕾泡芙', '將聽說布蕾包在泡芙裡<br>\r\n超獨特口感，保證外面吃不到<br>\r\n改良過的泡芙，食起來更加香、酥、脆<br>\r\n布蕾內餡也是滿滿的香草籽<br>\r\n應該對「香草籽」很熟悉了吧～', '當季熱賣'),
('生巧克力', 6, '巧克力、牛奶、鮮奶油、可可粉、白酒', 150, '生巧克力', '原味生巧克力：<br>\r\n我們特別選用法國Weiss「70% 阿卡利亞」作為生巧克力。<br>\r\n入口「微苦」，圓潤滑順口感，在嘴裡化開後散發「獨特香氣」，尾韻微微酸。<br>\r\n日本靜岡抹茶：<br>\r\n入口「微甜」，選用法國Weiss 34%白巧克力搭配日本靜岡抹茶，襯托淡淡抹茶香氣。<br>\r\n（上層撒純日本靜岡抹茶粉，潮濕屬正常現象）', '情人節必備'),
('蘋果塔', 50, '蛋、麵粉、奶油、蘋果、鮮奶油、草莓', 15, '蘋果塔', '裝飾：新鮮草莓<br>\r\n上層：蜜蘋果刨片、香提奶油餡<br>\r\n內餡：梨山蜜蘋果<br>\r\n<br>\r\n季節限定，嚴選梨山蜜蘋果<br>\r\n香甜來自蜜蘋果<br>\r\n無多餘調味，呈現水果自然風味<br>\r\n吃得到蜜香、搭配酥脆塔皮<br>\r\n單純的呈現食材樣貌<br>\r\n<br>\r\n無添加肉桂<br>\r\n（不用擔心，因為老闆不吃）', '情人節必備'),
('香水檸檬布蕾', 55, '雞蛋、牛奶、奶粉、香草豆莢、糖、水、鮮奶油、檸檬', 11, '香水檸檬布蕾', '香水檸檬來自桃園的香水檸檬<br>\r\n檸檬香氣搭配布蕾奶香<br>\r\n真的超級適合夏天的<br>\r\n<br>\r\n老闆推薦款!!', '情人節必備');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Account`,`PName`),
  ADD KEY `PName` (`PName`);

--
-- 資料表索引 `cart_record`
--
ALTER TABLE `cart_record`
  ADD PRIMARY KEY (`Account`,`PName`,`Time`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Account`);

--
-- 資料表索引 `orderform`
--
ALTER TABLE `orderform`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `Account` (`Account`);

--
-- 資料表索引 `orderform_record`
--
ALTER TABLE `orderform_record`
  ADD PRIMARY KEY (`OID`,`Account`),
  ADD KEY `Account` (`Account`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PName`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `orderform`
--
ALTER TABLE `orderform`
  MODIFY `OID` int(5) NOT NULL AUTO_INCREMENT COMMENT '訂單編號';
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Account`) REFERENCES `member` (`Account`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`PName`) REFERENCES `product` (`PName`);

--
-- 資料表的 Constraints `cart_record`
--
ALTER TABLE `cart_record`
  ADD CONSTRAINT `cart_record_ibfk_1` FOREIGN KEY (`Account`,`PName`) REFERENCES `cart` (`Account`, `PName`);

--
-- 資料表的 Constraints `orderform`
--
ALTER TABLE `orderform`
  ADD CONSTRAINT `orderform_ibfk_1` FOREIGN KEY (`Account`) REFERENCES `member` (`Account`);

--
-- 資料表的 Constraints `orderform_record`
--
ALTER TABLE `orderform_record`
  ADD CONSTRAINT `orderform_record_ibfk_1` FOREIGN KEY (`OID`) REFERENCES `orderform` (`OID`),
  ADD CONSTRAINT `orderform_record_ibfk_2` FOREIGN KEY (`Account`) REFERENCES `orderform` (`Account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
