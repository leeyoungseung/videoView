-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 17-08-28 03:50
-- 서버 버전: 10.1.24-MariaDB
-- PHP 버전: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `membermst`
--

CREATE TABLE `membermst` (
  `memId` varchar(4) COLLATE utf8_bin NOT NULL,
  `memName` varchar(20) COLLATE utf8_bin NOT NULL,
  `memMail` varchar(40) COLLATE utf8_bin NOT NULL,
  `comName` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 테이블의 덤프 데이터 `membermst`
--

INSERT INTO `membermst` (`memId`, `memName`, `memMail`, `comName`) VALUES
('0001', '平井　桃', 'momo@gmail.com', 'JYP'),
('0002', '湊崎　sana', 'sana@gmail.com', 'JYP'),
('0003', '名井　南', 'mina@gmail.com', 'JYP'),
('0004', '橋本環奈', 'kanna@gamil.com', '特になし'),
('0005', '木村拓哉', 'takuya@gmail.com', 'NHK'),
('0006', 'イーヨンスン', 'youngseung@gmail.com', 'enet'),
('0007', 'あすか', 'ausu@yahoo.co.jp', 'yahoo'),
('0008', '春香', 'haru@gmail.com', 'google'),
('0009', '田中', 'tanaka@gmail.com', 'google'),
('0010', '朱雀', 'suzyaku@yahoo.co.jp', 'yahoo'),
('0011', '真美', 'mami@gamil.com', 'google');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
