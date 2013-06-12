-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 13-05-31 21:22 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `moonwork`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `food`
--

INSERT INTO `food` (`id`, `name`, `type`, `genre`) VALUES
('beansoup', '된장찌개', '찌개', '밥'),
('beefgb', '쇠고기김밥', '김밥', '분식'),
('cuttlerice', '오징어덮밥', '밥', '한식'),
('czdong', '치즈돈까스', '돈까스', '양식'),
('czgb', '치즈김밥', '김밥', '분식'),
('czrm', '치즈라면', '라면', '분식'),
('dong', '돈까스', '돈까스', '양식'),
('eggrm', '계란라면', '라면', '분식'),
('jjajang', '짜장면', '면', '중식'),
('jjambbong', '짬뽕', '면', '중식'),
('kimchisoup', '김치찌개', '찌개', '한식'),
('mandoorm', '만두라면', '라면', '분식'),
('omrice', '오므라이스', '밥', '양식'),
('osam', '오삼찌개', '찌개', '한식'),
('pbmesan', '폭발메산', '돈까스', '양식'),
('porkbok', '제육볶음', '볶음', '한식'),
('porkrice', '제육덮밥', '밥', '한식'),
('ricerm', '떡라면', '라면', '분식'),
('tofusouop', '순두부찌개', '찌개', '한식'),
('tunagb', '참치김밥', '김밥', '분식'),
('yachgb', '야채김밥', '김밥', '분식');

-- --------------------------------------------------------

--
-- 테이블 구조 `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
('snack', '분식'),
('american', '양식'),
('chinese', '중식'),
('korean', '한식');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`no`, `id`, `pw`, `name`, `email`, `phone`, `major`) VALUES
(1, 'pjm1989', 'white109', '박준민', 'neopjm109@naver.com', '01063654436', '멀티미디어공학과'),
(2, 'neopjm109', 'wnsals', '박준민', 'neopjm109@naver.com', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `shop` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`shop`,`food`),
  KEY `food` (`food`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `menu`
--

INSERT INTO `menu` (`shop`, `food`, `price`) VALUES
('김밥천국', '계란라면', 2500),
('김밥천국', '김치찌개', 4000),
('김밥천국', '돈까스', 4500),
('김밥천국', '된장찌개', 4000),
('김밥천국', '떡라면', 3000),
('김밥천국', '만두라면', 3000),
('김밥천국', '쇠고기김밥', 2500),
('김밥천국', '순두부찌개', 4000),
('김밥천국', '야채김밥', 2000),
('김밥천국', '오므라이스', 4000),
('김밥천국', '오징어덮밥', 4000),
('김밥천국', '제육덮밥', 4000),
('김밥천국', '참치김밥', 2500),
('김밥천국', '치즈김밥', 2000),
('김밥천국', '치즈돈까스', 5000),
('김밥천국', '치즈라면', 3000),
('승리장', '볶음밥', 4500),
('승리장', '짜장면', 3500),
('승리장', '짬뽕', 4000),
('윤가네', '계란라면', 2000),
('윤가네', '김치찌개', 3500),
('윤가네', '돈까스', 3500),
('윤가네', '된장찌개', 3500),
('윤가네', '떡라면', 2500),
('윤가네', '만두라면', 2500),
('윤가네', '쇠고기김밥', 2500),
('윤가네', '순두부찌개', 3500),
('윤가네', '야채김밥', 2000),
('윤가네', '오므라이스', 3500),
('윤가네', '오징어덮밥', 3500),
('윤가네', '제육덮밥', 3500),
('윤가네', '참치김밥', 2500),
('윤가네', '치즈김밥', 2500),
('윤가네', '치즈돈까스', 4000),
('윤가네', '치즈라면', 2500),
('한성분식', '오삼찌개', 4500),
('한성분식', '제육볶음', 4000),
('한아름', '폭발메산', 4500);

-- --------------------------------------------------------

--
-- 테이블 구조 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `price` int(10) NOT NULL,
  `deliver` int(4) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 테이블의 덤프 데이터 `order`
--


-- --------------------------------------------------------

--
-- 테이블 구조 `scoreboard`
--

CREATE TABLE IF NOT EXISTS `scoreboard` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `score` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 테이블의 덤프 데이터 `scoreboard`
--


-- --------------------------------------------------------

--
-- 테이블 구조 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `score` float NOT NULL,
  `deliver` int(2) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_3` (`id`),
  UNIQUE KEY `id_4` (`id`),
  KEY `id_2` (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 테이블의 덤프 데이터 `shop`
--

INSERT INTO `shop` (`no`, `id`, `name`, `phone`, `score`, `deliver`, `image`) VALUES
(1, 'yoongane', '윤가네', '02-765-7379', 0, 0, 'Yoongane.png'),
(2, 'gbheaven', '김밥천국', '02-3673-2722', 0, 1, 'none.png'),
(3, 'victory', '승리장', '02-760-1581', 0, 1, 'none.png'),
(4, 'hanareum', '한아름', '02-760-2222', 0, 0, 'none.png'),
(5, 'hansung', '한성분식', '02-760-3333', 0, 0, 'none.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
('gimbab', '김밥'),
('don', '돈까스'),
('rm', '라면'),
('noodle', '면'),
('rice', '밥'),
('koreansoup', '찌개');
