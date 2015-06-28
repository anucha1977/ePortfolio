-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2014 at 04:30 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beebraincode`
--
CREATE DATABASE IF NOT EXISTS `beebraincode` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `beebraincode`;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `Id_user` int(5) NOT NULL,
  `Type` int(1) NOT NULL,
  `Correct` int(5) NOT NULL,
  `Wrong` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(3) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `desc`) VALUES
(-1, 'Other Word'),
(1, 'กริยาซึ่งต้องตามด้วย gerund เท่านั้น');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `Username`, `Password`) VALUES
(1, 'beebrain', 'acaa16770db76c1ffb9cee51c3cabfcf');

-- --------------------------------------------------------

--
-- Table structure for table `word_test`
--

CREATE TABLE IF NOT EXISTS `word_test` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Word` varchar(255) COLLATE utf8_bin NOT NULL,
  `Desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `Info` varchar(255) COLLATE utf8_bin NOT NULL,
  `Type` int(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- Dumping data for table `word_test`
--

INSERT INTO `word_test` (`ID`, `Word`, `Desc`, `Info`, `Type`) VALUES
(1, 'admit', 'ยอมรับ', 'V', 1),
(2, 'anticipate', 'มุ่งหวัง', 'V', 1),
(3, 'appreciate', 'ซาบซึ้ง', 'V', 1),
(4, 'avoid', 'หลีกเลี่ยง', 'V', 1),
(5, 'compare', 'เปรียบเทียบ', 'V', 1),
(6, 'complete', 'ทำเสร็จ', 'V', 1),
(7, 'confess', 'สารภาพ', 'V', 1),
(8, 'consider', 'พิจารณา', 'V', 1),
(9, 'delay', 'ทำให้ช้า', 'V', 1),
(10, 'deny', 'ปฏิเสธ', 'V', 1),
(11, 'detest', 'รังเกียจ', 'V', 1),
(12, 'discuss', 'สนทนา', 'V', 1),
(13, 'dislike', 'ไม่ชอบ', 'V', 1),
(14, 'enjoy', 'สนุกสนาน', 'V', 1),
(15, 'escape', 'หลบหนี', 'V', 1),
(16, 'excuse', 'แก้ต่าง', 'V', 1),
(17, 'fancy', 'นึกฝัน,จินตนาการ', 'V', 1),
(18, 'finish', 'เสร็จ,สำเร็จ', 'V', 1),
(19, 'forgive', 'ให้อภัย,ยกโทษ', 'V', 1),
(20, 'imagine', 'จินตนาการ', 'V', 1),
(21, 'involve', 'เกี่ยวข้อง', 'V', 1),
(22, 'mention', 'กล่าวถึง', 'V', 1),
(23, 'mind', 'รังเกียจ', 'V', 1),
(24, 'miss', 'พลาด', 'V', 1),
(25, 'practice', 'ฝึกฝน', 'V', 1),
(26, 'postpone', 'เลื่อน,ผลัด', 'V', 1),
(27, 'recognize', 'จำได้', 'V', 1),
(28, 'recollect', 'ย้อนระลึก', 'V', 1),
(29, 'report', 'รายงาน', 'V', 1),
(30, 'resent', 'ขุ่นเคือง', 'V', 1),
(31, 'resist', 'ต้านทาน', 'V', 1),
(32, 'risk', 'เสี่ยง', 'V', 1),
(33, 'suggest', 'แนะนำ', 'V', 1),
(34, 'stand', 'อดทน', 'V', 1),
(35, 'stop', 'หยุด', 'V', 1),
(36, 'tolerate', 'อดทน', 'V', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
